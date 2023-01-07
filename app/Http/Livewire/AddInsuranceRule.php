<?php

namespace App\Http\Livewire;

use App\Models\Insurance;
use App\Models\InsuranceRules;
use App\Models\Locations;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class AddInsuranceRule extends ModalComponent
{
    public $region = 'Central';
    public $product = 'Comprehensive Renters Insurance';
    public function render()
    {
        return view('livewire.add-insurance-rule', [
            'regions' => Locations::get()->unique('region'),
            'products' => Insurance::get()->all()
        ]);
    }
    public function add()
    {
        $validateData = $this->validate([
            'region' => 'required',
            'product' => 'required'
        ]);
        InsuranceRules::create($validateData);
        return redirect()->to('/addons');
    }
}
