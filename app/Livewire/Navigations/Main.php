<?php

namespace App\Livewire\Navigations;

use Livewire\Component;

class Main extends Component
{
    public $links;

    public function mount(): void
    {
        $this->links = [
            ['name' => __('texts.home'), 'url' => '/'],
            ['name' => __('texts.about'), 'url' => '/about'],
            ['name' => __('texts.services'), 'url' => '/services'],
            ['name' => __('texts.contact'), 'url' => '/contact'],
        ];
    }
}
