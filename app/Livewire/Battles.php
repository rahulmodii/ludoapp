<?php

namespace App\Livewire;

use App\Models\Battles as ModelsBattles;
use Livewire\Component;

class Battles extends Component
{
    public $amount;

    public function setAmount()
    {
        // dd($this->amount);
        // id, creator_id, joining_id, game_id, creator_response, joining_response, amount, proof, status, created_at, updated_at
        $payload = [
            "creator_id" => auth()->user()->id,
            "game_id" => 1,
            "amount" => $this->amount
        ];
        ModelsBattles::create($payload);
        $this->amount = "";
        return $this->dispatch('messageNew', 'Game Created Successfully!');
    }

    public function onPlay($id)
    {
        // dd($id);
        ModelsBattles::find($id)->update([
            'is_request' => 1,
            'request_id' => auth()->user()->id
        ]);
    }

    public function onReject($id){
        ModelsBattles::find($id)->update([
            'is_request' => 0,
            'request_id' => 0
        ]);
    }

    public function onDelete($id){
        ModelsBattles::destroy($id);
    }

    public function render()
    {

        $data = ModelsBattles::where('creator_id', auth()->user()->id)->orderBy('id','desc')->get();
        $newData = ModelsBattles::where('creator_id', "!=", auth()->user()->id)->where('joining_id', 0)->orderBy('id','desc')->get();
        return view('livewire.battles', compact('data', 'newData'));
    }
}
