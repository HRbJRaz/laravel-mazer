<?php

namespace App\Http\Livewire;

use App\Models\LocationRules;
use App\Models\Locations;
use LivewireUI\Modal\ModalComponent;

class AddLocationRules extends ModalComponent
{
    public $pickUp = 'KLIA';
    public $dropOff = 'KLIA';
    public $charge = 0.00;

    public function render()
    {
        Locations::get();
        return view('livewire.add-location-rules', [
            'locations' => Locations::all()
        ]);
    }

    public function add()
    {
        $validateData = $this->validate([
            'pickUp' => 'required',
            'dropOff' => 'required',
            'charge' => 'required',
        ]);
        //dd($validateData);

        LocationRules::create($validateData);
        return redirect()->to('/locations');
    }
}
