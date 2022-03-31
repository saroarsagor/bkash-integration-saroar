<?php

//All Controller Path...
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;


// All routes list here....
Auth::routes();
Route::get('/', [WelcomeController::class, 'index']);
Route::get('/locale/{locale}', [HomeController::class, 'switchLanguage'])->name('/locale');
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');


//bkash route
Route::post('token', [PaymentController::class, 'token'])->name('token');
Route::get('createpayment', [PaymentController::class, 'createpayment'])->name('createpayment');
Route::get('executepayment', [PaymentController::class, 'executepayment'])->name('executepayment');





//Role Permission Routes Here....
Route::middleware('auth')->prefix('dashboard')->group(function () {

   

});



