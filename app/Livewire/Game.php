<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
class Game extends Component
{

    use WithFileUploads;
    public $image;
    public $name;
    public $description;
    public $status;
    public $min_amount;
    public $max_amount;

    public function store()
    {
        
        $validated = $this->validate([ 
            'name' => 'required|min:3',
            'description' => 'required|min:3',
        ]);
        dd($validated);
        // dd($this->image);
        // $image = $this->image->store('image','public');
        // $payload = [
        //     'image' => $image,
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'status' => $this->status,
        //     'min_amount' => $this->min_amount,
        //     'max_amount' => $this->max_amount
        // ];
        // dd($payload);
    }

    public function render()
    {
        return view('livewire.game');
    }
}
