<?php

namespace App\Livewire\HomePage;

use App\Enum\ContactDetails;
use Livewire\Component;

class HomeUsefulInformation extends Component
{
    public $facebook_link;
    public $address;
    public $address_google_map;
    public $telephone;
    public $email;

    public function mount(): void
    {
        $this->facebook_link = ContactDetails::Facebook->value;
        $this->address = ContactDetails::Address->value;
        $this->address_google_map = ContactDetails::AddressGoogleMap->value;
        $this->telephone = ContactDetails::Telephone->value;
        $this->email = ContactDetails::Email->value;
    }
}
