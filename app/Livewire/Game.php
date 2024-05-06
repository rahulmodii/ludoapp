<?php

namespace App\Livewire;

use App\Models\Battles;
use App\Models\ReferalAmount;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;

class Game extends Component
{

    use WithFileUploads;
    public $image;
    public $name;
    public $description;
    public $status;
    public $min_amount;
    public $max_amount;

    public function makeWinner($gameid, $id)
    {
        // dd($id);
        $battle = Battles::find($gameid);
        $user =  User::find($id);
        $user->increment('wallet_balance', $battle->game_amount);
        $battle->update([
            'winning_id' => $id
        ]);
        $referalUser = User::where('referral', $user->referral)->first();
        if ($referalUser) {
            $referalAmount = ceil($battle->game_amount * 0.01);
            $referalUser->increment('wallet_balance', $referalAmount);
            ReferalAmount::create([
                'battle_id' => $gameid,
                'user_id' => $id,
                'amount' => $referalAmount
            ]);
        }
        return $this->dispatch('message', 'Update Successfully!');
    }

    public function render()
    {
        $data = Battles::where('is_accepted', 1)->orderBy('id', 'desc')->get();
        return view('livewire.game', compact('data'));
    }
}
