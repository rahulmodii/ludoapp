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

    public function onSubmit()
    {
        
        $proof = "";
        if ($this->image) {
            $proof = $this->image->store('proof', 'public');
        }
        $data = Battles::find($this->currentId);
        $loggedInId = auth()->user()->id;



        if ($loggedInId == $data->creator_id) {
            $data->update([
                'creator_id_match_status' => $this->matchstatus,
                'creator_id_cancel_status' => $this->match_cancel_reason,
                'creator_id_winning_proof' => $proof
            ]);
        }

        if ($loggedInId == $data->joining_id) {
            $data->update([
                'joining_id_match_status' => $this->matchstatus,
                'joining_id_cancel_status' => $this->match_cancel_reason,
                'joining_id_winning_proof' => $proof
            ]);
        }

        $checkCancel = Battles::find($this->currentId);
        if ($checkCancel->creator_id_match_status == 3 && $checkCancel->joining_id_match_status == 3) {
            User::find($checkCancel->creator_id)->increment('wallet_balance', $checkCancel->amount);
            User::find($checkCancel->joining_id)->increment('wallet_balance', $checkCancel->amount);
            $checkCancel->update([
                'is_cancelled' => 1
            ]);
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


    public function render()
    {
        $data = Battles::find($this->currentId);
        return view('livewire.game-details', compact('data'));
    }
}
