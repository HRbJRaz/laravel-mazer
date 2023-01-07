<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;
use App\Models\SettingContact;

class SettingContactForm extends ModalComponent
{
    public $media = 'mobile';
    public $detail;
    public $display = 1;

    public function render()
    {
        SettingContact::get();
        return view('livewire.setting-contact-form', [
            'medias' => SettingContact::all()
        ]);
    }
    public function editForm()
    {
        return view('livewire.setting-contact-form');
    }
    public function edit()
    {
        $validate = $this->validate([
            'detail' => 'required'
        ]);
        dd($this);
    }
}
