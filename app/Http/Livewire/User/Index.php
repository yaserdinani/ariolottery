<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;

class Index extends Component
{
    public $user_id;
    public $user_name;
    public $score=0;

    protected $rules = [
        'user_name' => ['required'],
    ];

    public function addUser(){
        $this->validate();
        for($i = 0; $i < $this->score; $i++){
            User::create([
                "user_name"=>$this->user_name,
            ]);
        }
        $this->score = 0;
        $this->user_name =null;
    }

    public function setUserId($id){
        $this->user_id = $id;
    }

    public function delete(){
        $user = User::find($this->user_id);
        $user->delete();
    }

    public function render()
    {
        $users = User::all();
        return view('livewire.user.index',["users"=>$users])
        ->layout('layouts.panel');
    }
}
