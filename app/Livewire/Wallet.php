<?php

namespace App\Livewire;

use App\Models\Support;
use App\Models\User;
use App\Models\Wallet as ModelsWallet;
use Livewire\Component;
use Livewire\WithFileUploads;

class Wallet extends Component
{
    use WithFileUploads;
    public $amount;
    public $proof;
    public $withdraw_amount;
    public $isKYC = false;


    public function mount()
    {
        $isKYCCheck = User::where('id', auth()->user()->id)->whereNull('aadhar_number')->first();
        if (!$isKYCCheck) {
            $this->isKYC = true;
        }
    }

    public function deposit()
    {

        $proof = $this->proof->store('proof', 'public');
        ModelsWallet::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'amount' => $this->amount,
            'proof' => $proof,
            'type' => 1
        ]);

        return $this->dispatch('message', 'Request raised successfully!');
    }

    public function withdraw()
    {

        // dd($this->withdraw_amount);
        $this->validate(['withdraw_amount' => 'required|numeric|min:190']);
        if (auth()->user()->wallet_balance >= $this->withdraw_amount) {
            ModelsWallet::create([
                'user_id' => auth()->user()->id,
                'name' => auth()->user()->name,
                'amount' => $this->withdraw_amount,
                'type' => 2
            ]);
            return $this->dispatch('message', 'Request raised successfully!');
        } else {
            return $this->dispatch('message', 'Not Enough Balance!');
        }
    }

    public function render()
    {
        $upiId = Support::first();
        if ($upiId) {
            $upiId = $upiId->upi_id;
        }
        return view('livewire.wallet', compact('upiId'));
    }
}
