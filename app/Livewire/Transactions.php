<?php

namespace App\Livewire;

use App\Models\Wallet;
use Livewire\Component;

class Transactions extends Component
{
    public function render()
    {
        $id= auth()->user()->id;
        $data = Wallet::where('user_id',$id)->orderBy('id','desc')->get();
        return view('livewire.transactions',compact('data'));
    }
}
