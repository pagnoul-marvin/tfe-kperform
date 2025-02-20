<?php

namespace App\Livewire\LegalMentions;

use App\Models\User;
use Livewire\Component;

class LegalMentions extends Component
{
    public $owner;
    public function mount()
    {
        $this->owner = User::where('email', '=', 'marine.pagnoul.kine@gmail.com')->first();
    }
}
