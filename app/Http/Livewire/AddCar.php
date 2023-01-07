<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Locations;
use LivewireUI\Modal\ModalComponent;
use App\Models\CarTypes;
use App\Models\Owner;

class AddCar extends ModalComponent
{
    public $car;
    public $regNo;
    public $engineNo;
    public $cartype_id = 1;
    public $chassisNo;
    public $location_id = 1;
    public $state = 'Administration';
    public $owner_id = 1;
    public static function modalMaxWidth(): string
    {
        return '7xl';
    }
    public function render()
    {
        Owner::get();
        Car::select('state')->distinct()->get();
        Locations::get();
        CarTypes::get();
        return view('livewire.add-car', [
            'cartypes' => CarTypes::all(),
            'locations' => Locations::all(),
            'owners' => Owner::all(),
            'states' => Car::all()
        ]);
    }
    public function addCar()
    {
        //dd($this);
        $validated = $this->validate([
            'regNo' => 'required',
            'cartype_id' => 'required',
            'engineNo' => 'required',
            'chassisNo' => 'required',
            'location_id' => 'required',
            'owner_id' => 'required',
            'state' => 'required',
        ]);
        //dd($validated);

        Car::create($validated);

        return redirect()->to('/assets');
    }


    public static function closeModalOnEscape(): bool
    {
        return false;
    }
}
