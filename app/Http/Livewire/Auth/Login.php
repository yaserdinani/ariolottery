<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $user_name;
    public $password;

    protected $rules = [
        'user_name' => ['required'],
        'password' => ['required']
    ];

    public function login(){
        $this->validate();
        $credentials = [
            "user_name"=>$this->user_name,
            "password"=>$this->password
        ];
        if(Auth::attempt($credentials)){
            return redirect()->route('users.index');
        }
        return redirect()->back();
    }

    public function render()
    {
        return view('livewire.auth.login')
        ->layout('layouts.auth');
    }
}
