<?php

namespace App\Livewire\Navigations;

use App\Enum\ContactDetails;
use Livewire\Component;

class Footer extends Component
{
    public $nav_title;
    public $nav_links;
    public $socials_title;
    public $facebook_link;

    public $contact_title;
    public $telephone;
    public $address;
    public $address_link;
    public $email;
    public $language_title;
    public $marvin_portfolio_link;

    public function mount(): void
    {
        $this->nav_title = __('texts.nav');
        $this->nav_links = [
            ['name' => __('texts.home'), 'url' => '/'],
            ['name' => __('texts.about'), 'url' => '/about'],
            ['name' => __('texts.services'), 'url' => '/services'],
            ['name' => __('texts.contact'), 'url' => '/contact'],
            ['name' => __('texts.make_an_appointment'), 'url' => '/appointment/login'],
            ['name' => __('texts.my_profile'), 'url' => route('profile')],
            ['name' => __('texts.logout'), 'url' => route('logout')],
        ];
        $this->socials_title = __('texts.my_social_networks');
        $this->facebook_link = ContactDetails::Facebook->value;
        $this->contact_title = __('texts.contact_info');
        $this->telephone = ContactDetails::Telephone->value;
        $this->address = ContactDetails::Address->value;
        $this->address_link = ContactDetails::AddressGoogleMap->value;
        $this->email = ContactDetails::Email->value;
        $this->language_title = __('texts.switch_language');
        $this->marvin_portfolio_link = 'https://portfolio.marvinpagnoul.be';
    }
}
