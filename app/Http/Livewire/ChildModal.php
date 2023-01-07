<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class ChildModal extends ModalComponent
{
    public $name;

    public function mount($name)
    {
        $this->name = $name;
    }

    public function render()
    {
        return view('livewire.child-modal');
    }
}
