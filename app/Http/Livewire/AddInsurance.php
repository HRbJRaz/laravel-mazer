<?php

namespace App\Http\Livewire;

use App\Models\Insurance;
use LivewireUI\Modal\ModalComponent;

class AddInsurance extends ModalComponent
{
    public $product;
    public $coverage;
    public $percentage = 1;
    public function render()
    {
        return view('livewire.add-insurance');
    }
    public function add()
    {
        $validateData = $this->validate([
            'product' => 'required',
            'coverage' => 'required',
            'percentage' => 'required'
        ]);
        Insurance::create($validateData);
        return redirect()->to('/addons');
    }
}
