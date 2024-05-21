<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $userEmail = '';
    public $userPassword = '';
    public function mount($email, $password, $mobile=null)
    {
       $this->userEmail = $email;
       $this->userPassword = $password;
    }

    public function render()
    {
        return view('livewire.login');
    }
}
