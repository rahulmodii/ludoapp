<?php

namespace App\Livewire;

use App\Models\Battles;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class GameDetails extends Component
{
    use WithFileUploads;
    public $currentId;
    public $matchstatus;
    public $match_cancel_reason;
    public $match_proof;
    public $image;
    public $room_code;

    public function mount($id)
    {
        $this->currentId = decrypt($id);
        $data = Battles::find($this->currentId);
        if ($data) {
            $this->room_code = $data->room_code;
        }
    }

    // public function onSubmit()
    // {

    //     $proof = "";
    //     if ($this->image) {
    //         $proof = $this->image->store('proof', 'public');
    //     }
    //     $data = Battles::find($this->currentId);
    //     $loggedInId = auth()->user()->id;



    //     if ($loggedInId == $data->creator_id) {
    //         $data->update([
    //             'creator_id_match_status' => $this->matchstatus,
    //             'creator_id_cancel_status' => $this->match_cancel_reason,
    //             'creator_id_winning_proof' => $proof
    //         ]);
    //     }

    //     if ($loggedInId == $data->joining_id) {
    //         $data->update([
    //             'joining_id_match_status' => $this->matchstatus,
    //             'joining_id_cancel_status' => $this->match_cancel_reason,
    //             'joining_id_winning_proof' => $proof
    //         ]);
    //     }

    //     $checkCancel = Battles::find($this->currentId);
    //     if ($checkCancel->creator_id_match_status == 3 && $checkCancel->joining_id_match_status == 3) {
    //         User::find($checkCancel->creator_id)->increment('wallet_balance', $checkCancel->amount);
    //         User::find($checkCancel->joining_id)->increment('wallet_balance', $checkCancel->amount);
    //         $checkCancel->update([
    //             'is_cancelled' => 1,
    //         ]);
    //     }

    //     $checkWinLoss = Battles::find($this->currentId);
    //     if ($checkWinLoss->creator_id_match_status == 1 && $checkWinLoss->joining_id_match_status == 2) {
    //         User::find($checkWinLoss->creator_id)->increment('wallet_balance', $checkWinLoss->game_amount);
    //         $checkWinLoss->update([
    //             'winning_id' => $checkWinLoss->creator_id,
    //         ]);
    //     }

    //     $checkWinLoss = Battles::find($this->currentId);
    //     if ($checkWinLoss->creator_id_match_status == 2 && $checkWinLoss->joining_id_match_status == 1) {
    //         User::find($checkWinLoss->joining_id)->increment('wallet_balance', $checkWinLoss->game_amount);
    //         $checkWinLoss->update([
    //             'winning_id' => $checkWinLoss->joining_id,
    //         ]);
    //     }

    //     return redirect()->route('battels', ['id' => encrypt(1), 'tabId' => 1]);
    // }

    public function onSubmit()
    {
        $proof = "";
        if ($this->image) {
            $proof = $this->image->store('proof', 'public');
        }

        $battle = Battles::find($this->currentId);
        $loggedInId = auth()->user()->id;

        if ($loggedInId == $battle->creator_id) {
            $battle->update([
                'creator_id_match_status' => $this->matchstatus,
                'creator_id_cancel_status' => $this->match_cancel_reason,
                'creator_id_winning_proof' => $proof
            ]);
        } elseif ($loggedInId == $battle->joining_id) {
            $battle->update([
                'joining_id_match_status' => $this->matchstatus,
                'joining_id_cancel_status' => $this->match_cancel_reason,
                'joining_id_winning_proof' => $proof
            ]);
        }

        // Check if both parties have canceled
        if ($battle->creator_id_match_status == 3 && $battle->joining_id_match_status == 3) {
            User::find($battle->creator_id)->increment('wallet_balance', $battle->amount);
            User::find($battle->joining_id)->increment('wallet_balance', $battle->amount);
            $battle->update(['is_cancelled' => 1]);
        }

        // Check win/loss conditions
        if ($battle->creator_id_match_status == 1 && $battle->joining_id_match_status == 2) {
            User::find($battle->creator_id)->increment('wallet_balance', $battle->game_amount);
            $battle->update(['winning_id' => $battle->creator_id]);
        } elseif ($battle->creator_id_match_status == 2 && $battle->joining_id_match_status == 1) {
            User::find($battle->joining_id)->increment('wallet_balance', $battle->game_amount);
            $battle->update(['winning_id' => $battle->joining_id]);
        }

        return redirect()->route('battels', ['id' => encrypt(1), 'tabId' => 1]);
    }

    public function saveCode()
    {
        $data = Battles::find($this->currentId);
        $data->update([
            'room_code' => $this->room_code
        ]);

        return $this->dispatch('messageNew', 'Room Code Saved');
    }

    public function refreshSubscribers()
    {
        $data = Battles::find($this->currentId);
        $this->room_code = $data->room_code;
    }

    public function render()
    {
        $data = Battles::find($this->currentId);
        return view('livewire.game-details', compact('data'));
    }
}
