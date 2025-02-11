<?php

namespace App\Livewire;

use Livewire\Component;

class LangModifier extends Component
{
    public $locale;

    public function mount(): void
    {
        $this->locale = app()->getLocale();
    }

    public function changeLang(string $lang): void
    {
        $this->locale = $lang;
        session(['locale' => $lang]);
        app()->setLocale($lang);
        $this->dispatch('languageChanged');
    }
}
