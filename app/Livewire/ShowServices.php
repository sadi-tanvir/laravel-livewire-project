<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServices extends Component
{
    public function render()
    {
        $services = Service::get();
        return view('livewire.show-services', compact('services'));
    }
}
