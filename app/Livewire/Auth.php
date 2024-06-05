<?php

namespace App\Livewire;

use App\Models\User;
use App\Models\Verification;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Livewire\Component;
use Illuminate\Support\Str;

class Auth extends Component
{
    public $showOtp = false;
    public $mobile;
    public $referral;
    public $otp;
    public $wrongOtp = false;

    public function mount()
    {
        // dd(request()->query('referralCode'));
        if (request()->hasCookie('referralCode')) {
            $this->referral =  request()->cookie('referralCode');
        }else{
            Cookie::queue('referralCode', request()->query('referralCode'), 60 * 24 * 30);
            $this->referral =  request()->cookie('referralCode');
        }

    }

    public function save()
    {

        if ($this->showOtp) {
            $otp = $this->otp;
            $verification = Verification::where('otp', $otp)->first();
            if ($verification) {
                $user = User::where('mobile', $verification->mobile)->first();
                Verification::where('otp', $otp)->delete();
                FacadesAuth::login($user, true);
                return redirect()->route('dashboard');
            } else {
                $this->wrongOtp = true;
            }
        } else {
            $mobile = $this->mobile;
            $referral = $this->referral;
            // dd($mobile);
            $user = User::where('mobile', $mobile)->first();
            // dd($user);
            $userid = Str::random(8);
            if (!$user) {
                User::create([
                    'name' => $userid,
                    'mobile' => $mobile,
                    'password' => Hash::make($mobile),
                    'email' => "$userid@ludogameclub.com",
                    'userid' => $userid,
                    'referral' => $referral
                ]);
            }
            $otp = mt_rand(100000, 999999);
            $payload = ['mobile' => $this->mobile, 'otp' => $otp];
            $apiKey = 'j9uVClJAmM5TKypkgF6DQ23abvtiEUz1eIPH7OnX8LsZNSRWw4oNX6WU9LItD0d7KM52yjPbSvhHBEwk'; // Replace with your actual API key
            $numbers = $this->mobile; // Numbers to which OTP is sent
            $variableValues = $otp; // OTP or variable value to send
            $route = 'otp'; // Specify the route
            $this->showOtp = true;
            $response = Http::get('https://www.fast2sms.com/dev/bulkV2', [
                'authorization' => $apiKey,
                'variables_values' => $variableValues,
                'route' => $route,
                'numbers' => $numbers,
            ]);
            // dd($response->body());
            Verification::create($payload);
        }
    }

    public function render()
    {
        return view('livewire.auth');
    }
}
