<?php

namespace App\Http\Livewire\Forms;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $success;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|min:5'
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function submit()
    {

        Contact::create($this->validate());

        $this->reset(['name', 'email', 'message']);

        $this->success = 'Contact Form Successfully Submitted';
    }

    public function render()
    {
        return view('livewire.forms.contact-form');
    }
}