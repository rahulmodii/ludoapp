<?php

namespace App\Livewire;

use App\Models\Support;
use Livewire\Component;

class SupportForm extends Component
{

    public $mobile1;
    public $mobile2;
    public $mobile3;
    public $email;

    public function mount(){
        $preData = Support::first();
        if ($preData) {
            $this->mobile1 = $preData->mobile1;
            $this->mobile2 = $preData->mobile2;
            $this->mobile3 = $preData->mobile3;
            $this->email = $preData->email;
        }


    }

    public function store(){
        $payload = [
            'mobile1'=>$this->mobile1,
            'mobile2'=>$this->mobile2,
            'mobile3'=>$this->mobile3,
            'email'=>$this->email
        ];

        $preCheck = Support::first();
        if ($preCheck) {
            Support::where('id',1)->update($payload);
        } else {
            Support::create($payload);
        }
        
    }

    public function render()
    {
        $data = Support::first();
        return view('livewire.support-form',compact('data'));
    }
}
