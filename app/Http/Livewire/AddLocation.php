<?php

namespace App\Http\Livewire;

use App\Models\Locations;
use LivewireUI\Modal\ModalComponent;

class AddLocation extends ModalComponent
{
    protected $table = "locations";
    public $region = "Central";
    public $name = "KLIA";
    public $status = "Active";
    public function render()
    {
        $regions = Locations::get()->unique('region');
        return view('livewire.add-location', [
            'regions' => $regions,

        ]);
    }
    public function add()
    {
        $validatedata = $this->validate([
            'region' => 'required',
            'name' => 'required',
            'status' => 'required',
        ]);

        Locations::create($validatedata);

        return redirect()->to('/locations');
    }
}
