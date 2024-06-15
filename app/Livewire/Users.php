<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Wallet;
use Livewire\Component;

class Users extends Component
{

    public $amount;
    public $current_Id;

    public function deposit()
    {
        $this->validate([
            'amount' => 'required|numeric|min:1'
        ]);
        $user = User::find($this->current_Id);

        Wallet::create([
            'user_id' => $this->current_Id,
            'name' => $user->name,
            'amount' => $this->amount,
            'proof' => '',
            'type' => 1,
            'status' => 1
        ]);
        $user->increment('wallet_balance', $this->amount);
        return $this->dispatch('message', 'Request raised successfully!');
        // $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Amount Added Successfully']);
    }

    public function withdraw()
    {
        $this->validate([
            'amount' => 'required|numeric|min:1'
        ]);
        $user = User::find($this->current_Id);
        if ($user->wallet_balance < $this->amount) {
            return $this->dispatch('message', 'Not Enough Balance to raise request!');
        }
        Wallet::create([
            'user_id' => $this->current_Id,
            'name' => $user->name,
            'amount' => $this->amount,
            'type' => 2,
            'status' => 1
        ]);
        $user->decrement('wallet_balance', $this->amount);
        return $this->dispatch('message', 'Request raised successfully!');
        // $this->dispatchBrowserEvent('alert', ['type' => 'success',  'message' => 'Amount Withdrawn Successfully']);
    }

    public function newFunction($id)
    {
        $this->current_Id = $id;
    }


    public function render()
    {
        $data = User::where('role', '!=', 5)->orderBy('id', 'desc')->get();
        return view('livewire.users', compact('data'));
    }
}
