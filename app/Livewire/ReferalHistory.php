<?php

namespace App\Livewire;

use App\Models\ReferalAmount;
use App\Models\User;
use Livewire\Component;

class ReferalHistory extends Component
{
    public function render()
    {
        // dd(auth()->user()->userid);
        $data = User::where('referral',auth()->user()->userid)->get();
        $referals = ReferalAmount::where('parent_id',auth()->user()->id)->get();
        return view('livewire.referal-history',compact('data','referals'));
    }
}
