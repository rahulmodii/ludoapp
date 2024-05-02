<?php

namespace App\Livewire;

use App\Models\Battles as ModelsBattles;
use Livewire\Component;

class Battles extends Component
{   
    public $amount;

    public function setAmount(){
        // dd($this->amount);
        // id, creator_id, joining_id, game_id, creator_response, joining_response, amount, proof, status, created_at, updated_at
        $payload = [
            "creator_id"=>auth()->user()->id,
            "game_id"=>1,
            "amount"=>100
        ];
        ModelsBattles::create($payload);
    }

    public function render()
    {
        
        $data = ModelsBattles::where('creator_id',auth()->user()->id)->get();
        return view('livewire.battles',compact('data'));
    }
}
