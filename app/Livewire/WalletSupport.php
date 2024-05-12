<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Wallet;
use Livewire\Component;

class WalletSupport extends Component
{

    public function onAccept($id)
    {
        $request = Wallet::find($id);
        if ($request->type == 1) {
            User::find($request->user_id)->increment('wallet_balance', $request->amount);
            $request->update(['status' => 1]);
        } else {
            // User::find($request->user_id)->decrement('wallet_balance', $request->amount);
            $request->update(['status' => 1]);
        }

        return $this->dispatch('message', 'Wallet Balance Added Succssfully!');
    }

    public function onReject($id)
    {
        $request = Wallet::find($id);
        if ($request->type != 1) {
            $user = User::find($request->user_id)->increment('wallet_balance', $request->amount);
            $request->update(['status' => 1]);
        }
        $request->update(['status' => 2]);
        return $this->dispatch('message', 'Wallet Balance Request Denied!');
    }

    public function render()
    {
        $data = Wallet::orderBy('id', 'desc')->get();
        return view('livewire.wallet-support', compact('data'));
    }
}
