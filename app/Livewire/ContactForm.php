<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $subject;

    protected $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
        'message' => 'required|min:3',
        'subject' => 'required|min:3',
    ];

    public function submit()
    {
        $this->validate();

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
            'subject' => $this->subject,
        ]);


        session()->flash('message', 'Form submitted successfully.');

        // Optionally reset form fields
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
