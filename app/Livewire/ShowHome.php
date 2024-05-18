<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowHome extends Component
{
    public function render()
    {
        $services = Service::limit(5)->get();
        return view('livewire.show-home', compact('services'));
    }
}
