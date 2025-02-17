<?php

namespace App\Livewire\Navigations;

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
            ['name' => __('texts.my_profile'), 'url' => '/profile'],
            ['name' => __('texts.logout'), 'url' => '/logout'],
        ];
        $this->socials_title = __('texts.our_social_networks');
        $this->facebook_link = 'https://www.facebook.com/profile.php?id=100067500763943';
        $this->contact_title = __('texts.contact_info');
        $this->telephone = '+32(0) 472 553 266';
        $this->address = 'Cité du Bois Goulet 85, 4801 Stembert';
        $this->address_link = 'https://www.google.com/maps/place/Cit%C3%A9+du+Bois+Goulet+85,+4801+Verviers/@50.5804305,5.8921135,17z/data=!3m1!4b1!4m6!3m5!1s0x47c08971907db731:0xbc958dfc36d4bcae!8m2!3d50.5804305!4d5.8946884!16s%2Fg%2F11kk4jw9kv?entry=ttu&g_ep=EgoyMDI1MDIxMi4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D';
        $this->email = 'marine.pagnoul.kine@gmail.com';
        $this->language_title = __('texts.switch_language');
        $this->marvin_portfolio_link = 'https://portfolio.marvinpagnoul.be';
    }
}
