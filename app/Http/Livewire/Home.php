<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Setting;

class Home extends Component
{
    public $user;
    public $first_user_name=null;
    public $first_user_score=null;
    public $second_user_name=null;
    public $second_user_score=null;
    public $third_user_name=null;
    public $third_user_score=null;
    public $scores;

    public function choose(){
        $this->user = User::inRandomOrder()->where('level',0)->where('id','!=',1)->get()->first();
        $setting  = Setting::find(1);
        if($setting->tmp_level<$setting->max_level){
            User::where('user_name',$this->user->user_name)->update([
                'level' => $setting->tmp_level+1
            ]);
            $setting->update([
                'tmp_level' => $setting->tmp_level+1
            ]);
        }
    }

    public function render()
    {
        $this->scores = User::where('id','!=',1)->count();
        $first = User::where('level',1)->get()->first();
        $second = User::where('level',2)->get()->first();
        $third = User::where('level',3)->get()->first();
        if($first){
            $this->first_user_name = User::where('level',1)->first()->user_name;
            $this->first_user_score = User::where('level',1)->count();
        }
        if($second){
            $this->second_user_name = User::where('level',2)->first()->user_name;
            $this->second_user_score = User::where('level',2)->count();
        }
        if($third){
            $this->third_user_name = User::where('level',3)->first()->user_name;
            $this->third_user_score = User::where('level',3)->count();
        }
        return view('livewire.home',[
            "scores"=>$this->scores,
            "first_user_name"=>$this->first_user_name,
            "first_user_score"=>$this->first_user_score,
            "second_user_name"=>$this->second_user_name,
            "second_user_score"=>$this->second_user_score,
            "third_user_name"=>$this->third_user_name,
            "third_user_score"=>$this->third_user_score
        ]);
    }
}
