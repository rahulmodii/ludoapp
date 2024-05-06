<?php

namespace App\Livewire;

use App\Models\Battles as ModelsBattles;
use App\Models\Support;
use Livewire\Component;

class Battles extends Component
{
    public $amount;

    public function setAmount()
    {
        // dd($this->amount);
        // id, creator_id, joining_id, game_id, creator_response, joining_response, amount, proof, status, created_at, updated_at
        $config = Support::first();
        $Amount = $this->amount * 2;
        $commissionAmount = $Amount * $config->commission / 100;
        $commissionAmount = ceil($commissionAmount);
        $gameAmount = $Amount - $commissionAmount;
        $payload = [
            "creator_id" => auth()->user()->id,
            "game_id" => 1,
            "amount" => $this->amount,
            'game_amount'=>$gameAmount
        ];
        // dd($payload);
        ModelsBattles::create($payload);
        $this->amount = "";
        return $this->dispatch('messageNew', 'Game Created Successfully!');
    }

    public function onPlay($id)
    {

        ModelsBattles::find($id)->update([
            'is_request' => 1,
            'request_id' => auth()->user()->id
        ]);
    }

    public function onReject($id)
    {
        ModelsBattles::find($id)->update([
            'is_request' => 0,
            'request_id' => 0
        ]);
    }

    public function onDelete($id)
    {
        ModelsBattles::destroy($id);
    }

    public function onAccept($id)
    {
        // dd($id);
        $preData = ModelsBattles::where('id', $id)->first();
        ModelsBattles::where('id', $id)->update([
            'is_request' => 2,
            'joining_id' => $preData->request_id,
            'is_accepted' => 1
        ]);

        return redirect()->route('gamedetails',['id'=>$id]);
    }

    public function render()
    {

        $preData = ModelsBattles::where('joining_id', auth()->user()->id)->where('is_accepted', 1)->orderBy('id', 'desc')->get();
        $data = ModelsBattles::where('creator_id', auth()->user()->id)->where('is_accepted', 0)->orderBy('id', 'desc')->get();
        $newData = ModelsBattles::where('creator_id', "!=", auth()->user()->id)->where('joining_id', 0)->orderBy('id', 'desc')->get();
        return view('livewire.battles', compact('data', 'newData','preData'));
    }
}
