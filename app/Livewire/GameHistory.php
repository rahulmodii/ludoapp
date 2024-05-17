<?php

namespace App\Livewire;

use App\Models\Battles;
use Livewire\Component;

class GameHistory extends Component
{
    public function render()
    {
        $data = Battles::where(function ($query) {
            $query->where('creator_id', auth()->user()->id)
                ->orWhere('joining_id', auth()->user()->id);
        })
        ->orderBy('id', 'desc')
        ->get();

        return view('livewire.game-history', compact('data'));
    }
}
