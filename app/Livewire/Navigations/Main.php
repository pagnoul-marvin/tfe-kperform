<?php

namespace App\Livewire\Navigations;

use Livewire\Component;

class Main extends Component
{
    public $links;

    public $is_profile_modal_open = false;
    public $is_notifications_modal_open = false;

    public function mount(): void
    {
        $this->links = [
            ['name' => __('texts.home'), 'url' => '/'],
            ['name' => __('texts.about'), 'url' => '/about'],
            ['name' => __('texts.services'), 'url' => '/services'],
            ['name' => __('texts.contact'), 'url' => '/contact'],
        ];
    }

    public function toggle_profile_modal(): void
    {
        $this->is_profile_modal_open = !$this->is_profile_modal_open;
        $this->is_notifications_modal_open = false;
    }

    public function toggle_notifications_modal(): void
    {
        $this->is_notifications_modal_open = !$this->is_notifications_modal_open;
        $this->is_profile_modal_open = false;
    }
}
