<?php

namespace App\Livewire\HomePage;

use App\Enum\ContactDetails;
use App\Models\User;
use Livewire\Component;

class HomeUsefulInformation extends Component
{
    public $facebook_link;
    public $address_google_map;
    public $marine;

    public function mount(): void
    {
        $this->facebook_link = ContactDetails::Facebook->value;
        $this->address_google_map = ContactDetails::AddressGoogleMap->value;
        $this->marine = User::getMarineInformation();
    }
}
