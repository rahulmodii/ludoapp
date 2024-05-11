<?php

namespace App\Livewire;

use App\Models\Battles as ModelsBattles;
use App\Models\Support;
use App\Models\User;
use Livewire\Component;

class Battles extends Component
{
    public $amount;
    public $game_id;
    public $tabId;

    public function mount($id,$tabId)
    {
        $this->tabId = $tabId;
        $id = decrypt($id);
        $this->game_id = $id;
    }

    public function adjustTab($id){
        return redirect()->route('battels',['id'=>encrypt($this->game_id),'tabId'=>$id]);
    }


    public function setAmount()
    {
        $walletBalance = auth()->user()->wallet_balance;
        if ($this->game_id == 1) {
            $this->validate([
                'amount' => [
                    'numeric',
                    'min:100',
                    'max:500',
                    function($attribute, $value, $fail) use ($walletBalance) {
                        if ($value > $walletBalance) {
                            $fail('The ' . $attribute . ' must be less than or equal to your wallet balance.');
                        }
                    }
                ]
            ]);
        }

        if ($this->game_id == 2) {
            $this->validate([
                'amount' => [
                    'numeric',
                    'min:500',
                    'max:25000',
                    function($attribute, $value, $fail) use ($walletBalance) {
                        if ($value > $walletBalance) {
                            $fail('The ' . $attribute . ' must be less than or equal to your wallet balance.');
                        }
                    }
                ]
            ]);
        }


        $config = Support::first();
        $Amount = $this->amount * 2;
        $commissionAmount = $Amount * $config->commission / 100;
        $commissionAmount = ceil($commissionAmount);
        $gameAmount = $Amount - $commissionAmount;
        $payload = [
            "creator_id" => auth()->user()->id,
            "game_id" => 1,
            "amount" => $this->amount,
            'game_amount' => $gameAmount
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

        $preData = ModelsBattles::where('id', $id)->first();
        ModelsBattles::where('id', $id)->update([
            'is_request' => 2,
            'joining_id' => $preData->request_id,
            'is_accepted' => 1
        ]);
        User::find($preData->creator_id)->decrement('wallet_balance', $preData->amount);
        return redirect()->route('gamedetails', ['id' => $id]);
    }

    public function render()
    {

        $preData = ModelsBattles::where('joining_id', auth()->user()->id)->where('is_accepted', 1)->orderBy('id', 'desc')->get();
        $data = ModelsBattles::where('creator_id', auth()->user()->id)->where('is_accepted', 0)->orderBy('id', 'desc')->get();
        $newData = ModelsBattles::where('creator_id', "!=", auth()->user()->id)->where('joining_id', 0)->orderBy('id', 'desc')->get();
        return view('livewire.battles', compact('data', 'newData', 'preData'));
    }
}
