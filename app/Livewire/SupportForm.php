<?php

namespace App\Livewire;

use App\Models\Support;
use Livewire\Component;
use Livewire\WithFileUploads;
class SupportForm extends Component
{

    use WithFileUploads;
    public $mobile1;
    public $mobile2;
    public $mobile3;
    public $email;
    public $upi_id;
    public $commission;
    public $login_image;
    public $logo;
    public $message_title;
    public $message_description;

    public function mount()
    {
        $preData = Support::first();
        if ($preData) {
            $this->mobile1 = $preData->mobile1;
            $this->mobile2 = $preData->mobile2;
            $this->mobile3 = $preData->mobile3;
            $this->email = $preData->email;
            $this->upi_id = $preData->upi_id;
            $this->commission = $preData->commission;
            $this->message_title = $preData->message_title;
            $this->message_description = $preData->message_description;
        }
    }

    public function store()
    {
       
        $payload = [
            'mobile1' => $this->mobile1,
            'mobile2' => $this->mobile2,
            'mobile3' => $this->mobile3,
            'email' => $this->email,
            'upi_id' => $this->upi_id,
            'commission' => $this->commission,
            'message_title' => $this->message_title,
            'message_description' => $this->message_description
        ];

        if ($this->login_image) {
            $payload['login_image'] = $this->login_image->store('support', 'public');
        }
        if ($this->logo) {
            $payload['logo'] = $this->logo->store('support', 'public');
        }
        // dd($payload);

        $preCheck = Support::first();
        if ($preCheck) {
            Support::where('id', 1)->update($payload);
        } else {
            Support::create($payload);
        }

        return $this->dispatch('messageNew','Support Updated Successfully!');
    }

    public function render()
    {
        $data = Support::first();
        return view('livewire.support-form', compact('data'));
    }
}
