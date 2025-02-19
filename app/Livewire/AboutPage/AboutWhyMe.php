<?php

namespace App\Livewire\AboutPage;

use Livewire\Component;

class AboutWhyMe extends Component
{
    public $image;

    public function mount()
    {
        $this->image = [
            ['name' => 'office.jpg', 'alt' => 'Photo du cabinet de Marine']
        ];
    }
}
