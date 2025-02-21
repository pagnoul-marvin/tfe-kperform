<?php

namespace App\Livewire\ContactPage;

use App\Livewire\Forms\ContactForm;
use App\Models\User;
use Livewire\Component;

class Contact extends Component
{
    public ContactForm $form;
    public $marine;

    public function mount(): void
    {
        $this->marine = User::getMarineInformation();
    }

    public function save(): void
    {
        $this->form->store();
        $this->form->reset();
        $this->dispatch('openMessage', 'contact_form_success');
    }
}
