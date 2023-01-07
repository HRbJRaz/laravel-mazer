<?php

namespace App\Http\Controllers;

use App\Models\insurance;
use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectController extends Controller
{
    public function index(Request $request)
    {
        $days = floor((strtotime($request->doDate) - strtotime($request->puDate)) / 86400);
        //dd($request);
        $location = Locations::get();

        $puloc = collect($location)
            ->where('id', '=', $request->puLoc)
            ->map(function ($group) {
                return [
                    'id' => $group->id,
                    'name' => $group->name,
                ];
            });

        if ($request->doLoc == null) {
            $request->doLoc = $request->puLoc;
        }

        $ins = insurance::select('price')->get()->first()->price;
        $ins = 1 + ($ins / 100);

        $cars = DB::select("SELECT ct.id, make, model, transmission, imgHook, day * $days * $ins AS price, cartype_id, type, seats, doors FROM cars c
        JOIN prices p ON c.cartype_id = p.car_type_id
        
        JOIN car_types ct ON ct.id = c.cartype_id
        WHERE location_id = ? AND regNo NOT IN (
            SELECT regNo FROM orders WHERE regNo NOT IN (
                SELECT regNo FROM orders WHERE `pickupDate` > ? OR `dropoffDate` < ?))
                GROUP BY ct.id, make, model, transmission, imgHook, day
                ORDER BY cartype_id;", [$request->puLoc, $request->doDate, $request->puDate]);
        //dd($cars);

        $makes = collect($cars)
            ->groupBy('make')
            ->map(function ($group) {
                return [
                    'cartype_id' => $group[0]->cartype_id,
                    'make' => $group[0]->make
                ];
            });

        $seats = collect($cars)
            ->groupBy('seats')
            ->map(function ($group) {
                return [
                    'seats' => $group[0]->seats
                ];
            });

        $types = collect($cars)
            ->groupBy('type')
            ->map(function ($group) {
                return [
                    'price' => $group[0]->price,
                    'type' => $group[0]->type,
                    'img' => $group[0]->imgHook
                ];
            });
        return view('website.select', [
            'puloc' => $puloc,
            'days' => $days,
            'types' => $types,
            'seats' => $seats,
            'makes' => $makes,
            'locations' => $location,
            'cars' => $cars,
            'post' => $request
        ]);
    }
}
