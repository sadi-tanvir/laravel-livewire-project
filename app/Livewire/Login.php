<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $userEmail = '';
    public $userPassword = '';


    public function render()
    {
        return view('livewire.login');
    }

    public function login(){
        $this->validate([
            'email' => "required | email",
            'password' => "required"
        ]);
        dd([$this->userEmail, $this->userPassword]);
    }
}
