<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Verification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd("here");
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function sendotp(Request $request)
    {
        // dd(['phone' => $request->mobile]);
        $mobile = $request->mobile;
        $user = User::where('mobile', $mobile)->first();
        // dd($user);
        $userid = Str::random(8);
        if (!$user) {
            User::create([
                'name' => $userid,
                'mobile' => $mobile,
                'password' => Hash::make($mobile),
                'email' => "$userid@ludoking.com",
                'userid' => $userid,
            ]);
        }
        $otp = mt_rand(100000, 999999);
        $payload = ['mobile' => $request->mobile, 'otp' => $otp];
        Verification::create($payload);
        return redirect()->route('verify', ['phone' => $request->mobile, 'otp' => $otp]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function verify($phone)
    {
        // dd($phone);
        return view('verify');
    }

    public function verifyhandel(Request $request)
    {

        $otp = $request->code_1;
        $verification = Verification::where('otp', $otp)->first();
        if ($verification) {
            $user = User::where('mobile', $verification->mobile)->first();
            // dd($user);
            Auth::login($user);
            return redirect()->route('dashboard');
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout()
    {
        $role = Auth::user()->role;
        if ($role) {
            Auth::logout();
            return redirect()->route('login');
        } else {
            Auth::logout();
            return redirect()->route('adminlogin');
        }
    }
}
