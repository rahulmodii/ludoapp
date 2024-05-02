<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'sendotp'])->name('sendotp');
Route::get('/verify/{phone?}', [AuthController::class, 'verify'])->name('verify');
Route::post('/verify', [AuthController::class, 'verifyhandel'])->name('verifyhandel');

Route::get('/admin/login',[AdminAuthController::class,'index']);
Route::post('/admin/login',[AdminAuthController::class,'store'])->name('handellogin');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/battels', function () {
        return view('battels');
    })->name('battels');
    Route::get('/support', function () {
        return view('contact');
    })->name('support');
    Route::get('/notifications', function () {
        return view('notification');
    })->name('notifications');
    Route::get('/referandearn', function () {
        return view('referandearn');
    })->name('referandearn');
    Route::get('/wallet', function () {
        return view('wallet');
    })->name('wallet');

    Route::prefix('admin')->group(function(){
        Route::get('/games',function(){
            return view('admin.games');
        })->name('games');
    });
});

