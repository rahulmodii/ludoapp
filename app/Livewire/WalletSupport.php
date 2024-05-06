<?php

namespace App\Livewire;

use App\Models\Wallet;
use Livewire\Component;

class WalletSupport extends Component
{
    public function render()
    {
        $data = Wallet::where('status',0)->orderBy('id','desc')->get(); 
        return view('livewire.wallet-support',compact('data'));
    }
}
