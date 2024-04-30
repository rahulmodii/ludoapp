<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return redirect()->route('verify', ['phone' => $request->mobile]);
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
        // dd($request->all());
        return redirect()->route('dashboard');
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
    public function destroy(string $id)
    {
        //
    }
}