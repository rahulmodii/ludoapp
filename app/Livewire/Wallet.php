<?php

namespace App\Livewire;

use App\Models\Battles;
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
    public $upi_id;
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

        $this->validate(['amount' => 'required|numeric|min:190', 'proof' => 'required|image']);

        $proof = $this->proof->store('proof', 'public');
        ModelsWallet::create([
            'user_id' => auth()->user()->id,
            'name' => auth()->user()->name,
            'amount' => $this->amount,
            'proof' => $proof,
            'type' => 1,
        ]);

        return $this->dispatch('message', 'Request raised successfully!');
    }

    public function withdraw()
    {


        $this->validate(['withdraw_amount' => 'required|numeric|min:190', 'upi_id' => 'required']);
        if (auth()->user()->wallet_balance >= $this->withdraw_amount) {
            $transactions = Battles::where(['creator_id' => auth()->user()->id, 'is_cancelled' => 0, 'joining_id' => 0])->count();
            if ($transactions == 0) {
                ModelsWallet::create([
                    'user_id' => auth()->user()->id,
                    'name' => auth()->user()->name,
                    'amount' => $this->withdraw_amount,
                    'type' => 2,
                    'upi_id' => $this->upi_id
                ]);
                User::where('id', auth()->user()->id)->decrement('wallet_balance', $this->withdraw_amount);
                return $this->dispatch('message', 'Request raised successfully!');
            } else {
                return $this->dispatch('message', 'Game in Process Please Complete Game Before withdrawl!');
            }
        } else {
            return $this->dispatch('message', 'Not Enough Balance!');
        }
    }

    public function render()
    {
        $support = Support::first();
        if ($support) {
            $upiId = $support->upi_id;
        }
        if ($support) {
            $qrCode = asset('/storage/'.$support->upi_qr);
        }
        return view('livewire.wallet', compact('upiId','qrCode'));
    }
}
