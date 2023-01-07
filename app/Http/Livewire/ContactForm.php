<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $subject = '';
    public $body = '';

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'subject' => 'required',
            'body' => 'required'
        ]);
        //dd($validatedData);

        Contact::create($validatedData);

        return redirect()->to('/');
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
