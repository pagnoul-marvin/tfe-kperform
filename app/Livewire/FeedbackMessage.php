<?php

namespace App\Livewire;

use Livewire\Component;

class FeedbackMessage extends Component
{
    public $message;
    public $visible = false;
    protected $listeners = ['closeMessage' => 'closeMessage', 'openMessage' => 'openMessage'];

    public function openMessage(string $message): void
    {
        $this->message = $message;
        $this->visible = true;
        $this->dispatch('start-message-timer');
    }

    public function closeMessage(): void
    {
        $this->visible = false;
    }
}
