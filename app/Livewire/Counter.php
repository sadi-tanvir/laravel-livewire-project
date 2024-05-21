<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $number = 0;
    public $email = '';

    public function mount(){
        $this->email = 'sadi@gmail.com';
    }

    public function render()
    {
        $this->number++;
        return view('livewire.counter');
    }
}
