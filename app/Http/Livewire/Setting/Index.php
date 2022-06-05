<?php

namespace App\Http\Livewire\Setting;

use Livewire\Component;
use App\Models\Setting;

class Index extends Component
{
    public $setting_id;
    public $tmp_level;
    public $max_level;

    public function setSettingId($id){
        $this->setting_id = $id;
    }

    public function edit(){
        $setting = Setting::find($this->setting_id);
        $setting->update([
            "tmp_level"=>$this->tmp_level,
            "max_level"=>$this->max_level
        ]);
        $this->tmp_level = null;
        $this->max_level = null;
    }

    public function render()
    {
        $settings = Setting::all();

        return view('livewire.setting.index',['settings'=>$settings])
        ->layout('layouts.panel');
    }
}
