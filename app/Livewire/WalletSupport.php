<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Wallet;
use Livewire\Component;

class WalletSupport extends Component
{

    public function onAccept($id){
      $request = Wallet::find($id);
      $user = User::find($request->user_id)->increment('wallet_balance',$request->amount);
      $request->update(['status'=>1]);
      return $this->message('Wallet Balance Added Succssfully!');
    }

    public function render()
    {
        $data = Wallet::where('status',0)->orderBy('id','desc')->get(); 
        return view('livewire.wallet-support',compact('data'));
    }
}
