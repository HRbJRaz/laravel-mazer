<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarController extends Controller
{
    public function index()
    {
        $cars = DB::table('car_types')
            ->join('prices', 'prices.car_type_id', '=', 'car_types.id')->inRandomOrder()
            ->limit(6)
            ->get();
        return view('website.car', [
            "cars" => $cars
        ]);
    }
}
