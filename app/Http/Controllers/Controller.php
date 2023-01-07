<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function findAvailableCars(Request $request)
    {
        $html = '';

        $puLoc = $request->puLoc;
        $doLoc = $request->doLoc;
        $puDate = $request->puDate;
        $doDate = $request->doDate;
        $puTime = $request->puTime;

        $cars = DB::select("SELECT ct.id, make, model, transmission, imgHook, day FROM cars c
        JOIN prices p ON c.cartype_id = p.car_type_id
        JOIN car_types ct ON ct.id = c.cartype_id
        WHERE location_id = ? AND regNo NOT IN (
            SELECT regNo FROM Orders WHERE regNo NOT IN (
                SELECT regNo FROM orders WHERE `pickupDate` > ? OR `dropoffDate` < ?))
                GROUP BY ct.id, make, model, transmission, imgHook, day
                ORDER BY cartype_id;", [$puLoc, $doDate, $puDate]);

        foreach ($cars as $car) {
            $html .= '    <div class="col-lg-4 col-md-6 mb-2">';
            $html .= '         <div class="rent-item mb-4">';
            $html .= '              <img class="img-fluid mb-4" src="' . asset("frontend/images/$car->imgHook") . '" alt="">';
            $html .= '              <h4 class="text-uppercase mb-4">' . $car->make . ' ' . $car->model . '</h4>';
            $html .= '              <div class="d-flex justify-content-center mb-4">';
            $html .= '                  <div class="px-2">';
            $html .= '                      <i class="fa fa-car text-primary mr-1"></i>';
            $html .= '                      <span>2015</span>';
            $html .= '                  </div>';
            $html .= '                  <div class="px-2 border-left border-right">';
            $html .= '                      <i class="fa fa-cogs text-primary mr-1"></i>';
            $html .= '                      <span>' . $car->transmission . '</span>';
            $html .= '                  </div>';
            $html .= '                  <div class="px-2">';
            $html .= '                      <i class="fa fa-road text-primary mr-1"></i>';
            $html .= '                      <span>25K</span>';
            $html .= '                  </div>';
            $html .= '              </div>';
            $html .= '              <button name="car_id" class="btn btn-primary px-3" value="' . $car->id . '">RM' . $car->day . '.00/Day</button>';
            $html .= '          </div>';
            $html .= '          <input type="hidden" name="puDate" value="' . $puDate . '">';
            $html .= '          <input type="hidden" name="doDate" value="' . $doDate . '">';
            $html .= '          <input type="hidden" name="puLoc" value="' . $puLoc . '">';
            $html .= '          <input type="hidden" name="doLoc" value="' . $doLoc . '">';
            $html .= '          <input type="hidden" name="puTime" value="' . $puTime . '">';
            $html .= '      </div>';
        }


        return $html;
    }
}
