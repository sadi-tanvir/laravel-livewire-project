<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $userEmail = '', $userPassword = '', $remember = '';

    protected $rules = [
        'userEmail' => "required | email",
        'userPassword' => "required | min:5",
        'remember' => "required"
    ];

    public function render()
    {
        return view('livewire.login');
    }

    public function updated()
    {
        $this->validate();
    }


    public function save() {
        $this->validate();
        $this->login();
    }

    protected function login()
    {
        if(!Auth::attempt(['email'=>$this->userEmail, 'password' => $this->userPassword], $this->remember)){

        session()->flash("error", "Email or Password not correct!");
        }else {
            session()->flash("success");
            $this->redirect('/', navigate:true);
        }
    }

}
