<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use App\Models\insurance;
use App\Models\Orders;
use App\Models\StripeCustomers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $car_rental = DB::table('cars')
            ->join('prices', 'car_type_id', '=', 'cars.cartype_id')
            ->join('car_types', 'car_types.id', '=', 'cars.cartype_id')
            ->where('cartype_id', '=', $request->cartype)
            ->get()
            ->first();
        $stripe = new \Stripe\StripeClient(env('STRIPE_SK'));

        $ins = insurance::select('price')->get()->first()->price;
        $ins = 1 + ($ins / 100);
        $regno = $car_rental->regNo;

        //dd($request);
        $days = round((strtotime($request->doDate) - strtotime($request->puDate)) / 86400);

        $totalPrice = 0;
        $lineItems = [];
        $lineItems[] = [
            'price_data' => [
                'currency' => 'myr',
                'product_data' => [
                    'name' => $car_rental->make . ' ' . $car_rental->model,
                ],
                'unit_amount' => $car_rental->day * 100 * $ins,
            ],
            'quantity' => $days,
        ];

        $totalPrice = $totalPrice + $car_rental->day * $days;

        if ($request->infantQty > 0) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'myr',
                    'product_data' => [
                        'name' => "Infant Seat",
                        'description' => $request->infantQty . " seats X " . $days . " days"

                    ],
                    'unit_amount' => 4200,
                ],
                'quantity' => $days * $request->infantQty,
            ];
        }

        $totalPrice = $totalPrice + 42 *  $days * $request->infantQty;

        if ($request->toddlerQty > 0) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'myr',
                    'product_data' => [
                        'name' => "Toddler Seat",
                        'description' => $request->toddlerQty . " seats X " . $days . " days"
                    ],
                    'unit_amount' => 4200,
                ],
                'quantity' => $days * $request->toddlerQty,
            ];
        }

        $totalPrice = $totalPrice + 42 *  $days * $request->toddlerQty;

        //dd($totalPrice);

        $session = $stripe->checkout->sessions->create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'customer_creation' => 'always',
            'allow_promotion_codes' => true,
            'success_url' => route('checkout.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('checkout.cancel', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
        ]);
        //dd($session);

        $order = new Orders();
        $order->status = 'unpaid';
        $order->total_price = $totalPrice;
        $order->session_id = $session->id;
        $order->regNo = $regno;
        $order->pickupDate = date('Y-m-d', strtotime($request->puDate));
        $order->dropoffDate = date('Y-m-d', strtotime($request->doDate));
        $order->pickupLocation = $request->puLoc;
        $order->dropoffLocation = $request->doLoc;
        $order->save();

        /*dd($request);
        $request->validate([
            'idno' => 'required',
            'idFile' => 'required|mimes:jpg,png,jpeg|max:5048',
            'licno' => 'required',
            'licFile' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);*/

        $checkCustomer = Customers::where('email', '=', $request->email);
        if ($checkCustomer->count() == 0) {

            $customerInfo = new Customers();
            $customerInfo->session_id = $session->id;
            $customerInfo->fname = $request->fName;
            $customerInfo->lname = $request->lName;
            $customerInfo->email = $request->email;
            $customerInfo->age = $request->age;
            $customerInfo->tel = $request->tel;
            $customerInfo->country = $request->country;
            $idFile = $request->hasFile('idFile');
            if ($idFile) {
                $newFile = $request->file('idFile');
                $newFile->store('idFile');
                $newIdFileName = time() . '-' . $request->idno . '.' . $request->idFile->extension();
                $request->idFile->move(public_path('images/id'), $newIdFileName);

                $customerInfo->idNo = $request->idno;
                $customerInfo->idPath = $newIdFileName;
            }

            $licFile = $request->hasFile('licFile');
            if ($licFile) {
                $newFile = $request->file('licFile');
                $newFile->store('licFile');
                $newLicFileName = time() . '-' . $request->licno . '.' . $request->licFile->extension();
                $request->licFile->move(public_path('images/license'), $newLicFileName);

                $customerInfo->licNo = $request->licno;
                $customerInfo->licPath = $newLicFileName;
            }

            $customerInfo->address = $request->address;
            $customerInfo->city = $request->city;
            $customerInfo->poscode = $request->poscode;
            $customerInfo->state = $request->state;
            $customerInfo->save();
        }
        return redirect()->away($session->url);
    }

    public function success(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SK'));
        $sessionId = $request->get('session_id');
        //dd($sessionId);

        try {
            $session = $stripe->checkout->sessions->retrieve($sessionId);
            //dd($session);
            if (!$session) {
                throw new NotFoundHttpException;
            }
            $customer = $stripe->customers->retrieve($session->customer);

            $checkCustomer = StripeCustomers::where('stripe_id', $customer->id)->count();
            //dd($checkCustomer);
            if ($customer->count() == 0) {
                $customerInfo = new StripeCustomers();
                $customerInfo->stripe_id = $customer->id;
                $customerInfo->email = $customer->email;
                $customerInfo->save();
            }

            $order = Orders::where('session_id', $session->id)->first();
            //dd($order);
            if (!$order) {
                throw new NotFoundHttpException();
            }
            //dd($customer->id);
            if ($order->status === 'unpaid') {
                $order->customer_id = $customer->id;
                $order->status = 'paid';
                $order->save();
            }

            return view('website.checkout-success', compact('customer'));
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }

    public function cancel(Request $request)
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SK'));
        $sessionId = $request->get('session_id');
        //dd($sessionId);

        try {
            $session = $stripe->checkout->sessions->retrieve($sessionId);
            dd($session);
            if (!$session) {
                throw new NotFoundHttpException;
            }
            $customer = $stripe->customers->retrieve($session->customer);
            $order = Orders::where('session_id', $session->id)->first();
            dd($order);
            if (!$order) {
                throw new NotFoundHttpException();
            }
            //dd($customer->id);
            if ($order->status === 'unpaid') {
                $order->status = 'cancelled';
                $order->save();
            }

            return view('website.checkout-cancel', compact('customer'));
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }

    public function webhook()
    {
    }
}
