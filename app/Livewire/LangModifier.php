<?php

namespace App\Livewire;

use Livewire\Component;

class LangModifier extends Component
{
    public $locale;
    public $route_name;

    public function mount(string $route_name): void
    {
        $this->locale = app()->getLocale();
        $this->route_name = $route_name;
    }

    public function changeLang(string $lang): void
    {
        $this->locale = $lang;
        session()->put('locale', $lang);
        $this->redirect(route($this->route_name));
    }
}
