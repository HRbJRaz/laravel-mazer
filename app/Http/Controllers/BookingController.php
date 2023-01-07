<?php

namespace App\Http\Controllers;

use App\Models\insurance;
use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $days = round((strtotime($request->doDate) - strtotime($request->puDate)) / 86400);

        $request->puLoc = Locations::where('id', '=', $request->puLoc)->select('name', 'id')->get();

        $request->doLoc = Locations::where('id', '=', $request->doLoc)->select('name', 'id')->get();

        $ins = insurance::select('price')->get()->first()->price;
        $ins = 1 + ($ins / 100);

        $cars = DB::select("SELECT ct.id, make, model, transmission, imgHook, regNo, day * $days * $ins AS price, cartype_id, type, seats, doors FROM cars c
        JOIN prices p ON c.cartype_id = p.car_type_id
        JOIN car_types ct ON ct.id = c.cartype_id
        WHERE cartype_id = ? AND regNo NOT IN (
            SELECT regNo FROM orders WHERE regNo NOT IN (
                SELECT regNo FROM orders WHERE `pickupDate` > ? OR `dropoffDate` < ?))
                LIMIT 1 ", [$request->cartype, $request->doDate, $request->puDate]);

        //dd($request);
        return view('website.booking', [
            'days' => $days,
            'post' => $request,
            'cars' => $cars
        ]);
    }
}
