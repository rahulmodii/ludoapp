<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class ReferalHistory extends Component
{
    public function render()
    {
        // dd(auth()->user()->userid);
        $data = User::where('referral',auth()->user()->userid)->get();
        return view('livewire.referal-history',compact('data'));
    }
}
