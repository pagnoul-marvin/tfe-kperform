<?php

namespace App\Livewire\HomePage;

use Livewire\Component;

class HomeBePartOfTheKperformTeam extends Component
{
    public $pictures = [
        ['name' => 'marine.jpg', 'alt' => 'Photo de Marine'],
        ['name' => 'office.jpg', 'alt' => 'Photo du cabinet de Marine'],
    ];
    public $currentIndex = 0;
    public $slideInterval = 5000;

    public function nextSlide(): void
    {
        $this->currentIndex = ($this->currentIndex + 1) % count($this->pictures);
    }
}
