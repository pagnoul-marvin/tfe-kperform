<?php

namespace App\Livewire\AboutPage;

use App\Enum\UserRoles;
use App\Models\User;
use Livewire\Component;

class AboutMyTeam extends Component
{
    public $team_mates;

    public function mount(): void
    {
        $this->team_mates = User::whereIn('role', [UserRoles::Admin->value, UserRoles::Teammates->value])->get();
    }
}
