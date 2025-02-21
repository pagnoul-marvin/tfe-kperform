<?php

namespace App\Livewire\Forms;

use App\Models\ContactMessage;
use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactForm extends Form
{
    #[Validate]
    public $firstname;

    #[Validate]
    public $lastname;

    #[Validate]
    public $email;

    #[Validate]
    public $telephone;

    #[Validate]
    public $message;

    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|max:255',
            'message' => 'required',
        ];
    }

    public function store(): void
    {
        $this->validate();
        ContactMessage::create($this->all());
    }
}
