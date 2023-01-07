<?php

namespace App\Http\Livewire;

use App\Models\CarTypes;
use App\Models\vehicleType;
use LivewireUI\Modal\ModalComponent;

class AddCarType extends ModalComponent
{
    public $type;
    public $make;
    public $model;
    public $transmission;
    public $cc = 1.0;
    public $introYear = 2023;
    public $consumption = 15;
    public $doors = 4;
    public $seats = 4;
    public $details;
    public static function modalMaxWidth(): string
    {
        return '7xl';
    }
    public function render()
    {
        vehicleType::get();
        return view('livewire.add-car-type', [
            'vehicletypes' => vehicleType::all()
        ]);
    }
    public function add()
    {
        $validate = $this->validate([
            'type' => 'required',
            'make' => 'required',
            'model' => 'required',
            'transmission' => 'required',
            'cc' => 'required',
            'introYear' => 'required',
            'consumption' => 'required',
            'doors' => 'required',
            'seats' => 'required',
            'details' => 'required|min:20',
        ]);
        CarTypes::create($validate);
        return redirect()->to('/insurance');
    }
    public static function closeModalOnEscape(): bool
    {
        return false;
    }
}
