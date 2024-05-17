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

    public function mount($id, $tabId)
    {
        $this->tabId = $tabId;
        $id = decrypt($id);
        $this->game_id = $id;
    }

    public function adjustTab($id)
    {
        return redirect()->route('battels', ['id' => encrypt($this->game_id), 'tabId' => $id]);
    }


    public function setAmount()
    {
        $transactions = ModelsBattles::where(['creator_id' => auth()->user()->id, 'is_cancelled' => 0, 'joining_id' => 0])->count();
        if ($transactions != 0) {
            return $this->dispatch('messageNew', 'Battle Already in Progress!!');
        }
        $walletBalance = auth()->user()->wallet_balance;
        if ($this->game_id == 1) {
            $this->validate([
                'amount' => [
                    'numeric',
                    'min:100',
                    'max:500',
                    function ($attribute, $value, $fail) use ($walletBalance) {
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
                    function ($attribute, $value, $fail) use ($walletBalance) {
                        if ($value > $walletBalance) {
                            $fail('The ' . $attribute . ' must be less than or equal to your wallet balance.');
                        }
                    }
                ]
            ]);
        }

        $config = Support::first();
        $Amount = $this->amount * 2;
        $commissionRate = $config->commission / 100;
        $commissionAmount = $Amount * $commissionRate;
        $commissionAmount = ceil($commissionAmount);
        $gameAmount = $Amount - $commissionAmount;
        $payload = [
            "creator_id" => auth()->user()->id,
            "game_id" => $this->game_id,
            "amount" => $this->amount,
            'game_amount' => $gameAmount
        ];
        User::find(auth()->user()->id)->decrement('wallet_balance', $this->amount);
        ModelsBattles::create($payload);
        $this->amount = "";
        return $this->dispatch('messageNew', 'Game Created Successfully!');
    }

    public function onPlay($id)
    {
        $preData = ModelsBattles::where('id', $id)->first();
        $requester_balance = User::find(auth()->user()->id);
        if ((int)$requester_balance->wallet_balance < (int)$preData->amount) {
            return $this->dispatch('messageNew', 'Not Enough Balance to play!!');
        }
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
        $preQuery = ModelsBattles::find($id);
        $user = User::find(auth()->user()->id);
        $user->increment('wallet_balance', $preQuery->amount);
        $preQuery->delete();
    }

    public function onAccept($id)
    {
        $preData = ModelsBattles::where('id', $id)->first();



        ModelsBattles::where('id', $id)->update([
            'is_request' => 2,
            'joining_id' => $preData->request_id,
            'is_accepted' => 1
        ]);
        User::find($preData->request_id)->decrement('wallet_balance', $preData->amount);
        return redirect()->route('gamedetails', ['id' => encrypt($id)]);
    }

    public function render()
    {

        // Fetch all relevant battles in a single query
        $battles = ModelsBattles::where('game_id', $this->game_id)->where('is_cancelled', 0)
            ->whereNull('winning_id')
            ->orderBy('id', 'desc')
            ->get();


        $preData = $battles->where('joining_id', auth()->user()->id)
            ->where('joining_id_match_status', 0)
            ->where('is_accepted', 1);

        $data = $battles->where('creator_id_match_status', 0)->where('creator_id', auth()->user()->id);

        $newData = $battles->where('creator_id', '!=', auth()->user()->id)
            ->where('joining_id', 0);

        $runningBattles = $battles->where('joining_id_match_status', 0)->where('creator_id_match_status', 0)->whereNull('winning_id')->where('joining_id', '!=', 0);

        return view('livewire.battles', compact('data', 'newData', 'preData', 'runningBattles'));
    }
}
