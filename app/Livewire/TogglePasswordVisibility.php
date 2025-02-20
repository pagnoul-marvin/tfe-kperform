<?php

namespace App\Livewire;

use Livewire\Component;

class TogglePasswordVisibility extends Component
{
    public $visible = false;
    public $type = 'password';

    public function toggleVisibility(): void
    {
        $this->visible = !$this->visible;
        if ($this->visible) {
            $this->type = 'text';
        } else {
            $this->type = 'password';
        }
    }
}
