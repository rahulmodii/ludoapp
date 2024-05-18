<?php

use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Livewire\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/', [AuthController::class, 'sendotp'])->name('sendotp');
Route::get('/verify/{phone?}/{referal?}', [AuthController::class, 'verify'])->name('verify');
Route::post('/verify', [AuthController::class, 'verifyhandel'])->name('verifyhandel');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/login',[AdminAuthController::class,'index'])->name('adminlogin');
Route::post('/admin/login',[AdminAuthController::class,'store'])->name('handellogin');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/battels/{id}/{tabId?}', function () {
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

    Route::get('/transaction', function () {
        return view('transaction');
    })->name('transaction');

    Route::get('/myprofile', function () {
        return view('myprofile');
    })->name('myprofile');

    Route::get('/gamedetails/{id}', function () {
        return view('gamedetails');
    })->name('gamedetails');

    Route::get('/referalhistory', function () {
        return view('referalhistory');
    })->name('referalhistory');


    Route::get('/gamehistory', function () {
        return view('gamehistory');
    })->name('gamehistory');

    Route::middleware('isAdmin')->group(function(){
        Route::prefix('admin')->group(function(){
            Route::get('/games',function(){
                return view('admin.games');
            })->name('gameform');
            Route::get('/supportform',function(){
                return view('admin.supportform');
            })->name('supportform');
            Route::get('/walletsupport',function(){
                return view('admin.walletsupport');
            })->name('walletsupport');
            
            Route::get('/users',function(){
                return view('admin.users');
            })->name('users');
        });
    });

});


Route::get('terms',function(){
    return view('terms');
})->name('terms');

Route::get('privacy',function(){
    return view('privacy');
})->name('privacy');
