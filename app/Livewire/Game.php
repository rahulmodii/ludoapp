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
        $referalUser = User::where('userid', $user->referral)->first();
        if ($referalUser) {
            $referalAmount = ceil($battle->game_amount * 0.02);
            $referalUser->increment('wallet_balance', $referalAmount);
            ReferalAmount::create([
                'battle_id' => $gameid,
                'user_id' => $id,
                'amount' => $referalAmount,
                'parent_id' => $referalUser->id
            ]);
        }
        return $this->dispatch('message', 'Update Successfully!');
    }

    public function cancelGame($gameid)
    {
        $battleData = Battles::find($gameid);
        User::find($battleData->creator_id)->increment('wallet_balance', $battleData->amount);
        User::find($battleData->joining_id)->increment('wallet_balance', $battleData->amount);
        $battleData->update(['commission' => 0, 'is_cancelled' => 1]);
        return $this->dispatch('message', 'Game Cancel Successfully!');
    }

    public function render()
    {
        $data = Battles::where('is_accepted', 1)->orderBy('id', 'desc')->get();
        $userCount = User::where('role', '!=', 5)->count();
        $commission = Battles::whereNotNull('winning_id')->sum('commission');
        return view('livewire.game', compact('data', 'userCount', 'commission'));
    }
}
