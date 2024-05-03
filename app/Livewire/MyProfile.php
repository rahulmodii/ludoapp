<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyProfile extends Component
{
    public $email;
    public $aadhar_number;

    public function mount()
    {
        $this->email = auth()->user()->email;
        $this->aadhar_number = auth()->user()->aadhar_number;
    }

    public function saveEmail()
    {
        $id = auth()->user()->id;
        User::find($id)->update(['email' => $this->email]);
        return $this->dispatch('message', 'Saved Email SuccessFully!');
    }

    public function saveAadhaar()
    {
        $id = auth()->user()->id;
        User::find($id)->update(['aadhar_number' => $this->aadhar_number]);
        return $this->dispatch('message', 'Saved Aadhaar SuccessFully!');
    }

    public function render()
    {
        return view('livewire.my-profile');
    }
}
