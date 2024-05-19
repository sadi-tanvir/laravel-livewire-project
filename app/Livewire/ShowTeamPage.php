<?php

namespace App\Livewire;

// use Livewire\Attributes\Layout;
use Livewire\Component;

class ShowTeamPage extends Component
{
    // #[Layout('layouts.dashboard')]
    public function render()
    {
        return view('livewire.show-team-page')
                ->layout('layouts.dashboard');
    }
}
