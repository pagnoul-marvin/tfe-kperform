<?php

namespace App\Livewire\AboutPage;

use Livewire\Component;

class AboutPresentation extends Component
{
    public $image;

    public function mount()
    {
        $this->image = [
          ['name' => 'marine.jpg', 'alt' => 'Photo de Marine']
        ];
    }
}
