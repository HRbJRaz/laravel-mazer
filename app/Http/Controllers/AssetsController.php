<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    public function index()
    {
        return view('assets');
    }

    public function store(Request $request)
    {
        $car = new Car();
        $car->regNo = $request->regNo;
        $car->carType_id = $request->cartype;
        $car->engineNo = $request->engNo;
        $car->chassisNo = $request->chaNo;
        $car->location_id = $request->location;
        $car->state = $request->state;
        $car->dd();
    }
}
