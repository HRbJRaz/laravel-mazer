<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Locations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $locations = Locations::get();
        $cars = DB::table('car_types')
            ->join('prices', 'prices.car_type_id', '=', 'car_types.id')->inRandomOrder()
            ->limit(6)
            ->get();

        $age = array();
        for ($i = 18; $i < 30; $i++) {
            array_push($age, $i);
        }
        array_push($age, '30-60');

        for ($i = 31; $i < 100; $i++) {
            array_push($age, $i);
        }
        //dd($age);

        return view('website.index', [
            "locations" => $locations,
            "cars" => $cars,
            "ages" => $age,
        ]);
    }
}
