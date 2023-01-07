<?php

namespace App\Http\Livewire;

use App\Models\Locations;
use App\Models\Seat;
use App\Models\SeatTypes;
use LivewireUI\Modal\ModalComponent;

class AddSeat extends ModalComponent
{
    public $type;
    public $colour;
    public $region = 'Central';
    public $state = 'Administration';
    public function render()
    {
        $states = Seat::get()->unique('state');
        $colours = Seat::get()->unique('colour');
        $regions = Locations::get()->unique('region');
        $types = SeatTypes::get()->unique('type');
        return view('livewire.add-seat', [
            'types' => $types,
            'regions' => $regions,
            'colours' => $colours,
            'states' => $states
        ]);
    }
}
