<?php

namespace App\Livewire\Navigations;

use Livewire\Component;

class GoBack extends Component
{
    public $level;
    public $class;
    public function mount(string $titleLevel, string $class = null): void
    {
        if ($titleLevel == 'primary') {
            $this->level = 'primary';
        } else {
            $this->level = 'secondary';
        }

        $this->class = $class;
    }
}
