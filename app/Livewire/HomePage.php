<?php

namespace App\Livewire;

use Livewire\Component;

class HomePage extends Component
{
    public $myName = "Tanvir Hossain Sadi";

    public function render()
    {
        return view('livewire.home-page');
    }
}
