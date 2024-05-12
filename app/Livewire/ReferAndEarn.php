<?php

namespace App\Livewire;

use App\Models\ReferalAmount;
use App\Models\User;
use Livewire\Component;

class ReferAndEarn extends Component
{
    public function render()
    {
        $totalRefer = User::where('referral',auth()->user()->userid)->count();
        $totalCount = ReferalAmount::where('parent_id',auth()->user()->id)->sum('amount');
        return view('livewire.refer-and-earn',compact('totalRefer','totalCount'));
    }
}
