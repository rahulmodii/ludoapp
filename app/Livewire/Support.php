<?php

namespace App\Livewire;

use App\Models\Support as ModelsSupport;
use Livewire\Component;

class Support extends Component
{
    public function render()
    {
        $data = ModelsSupport::first();
        // dd($data);
        return view('livewire.support',compact('data'));
    }
}
