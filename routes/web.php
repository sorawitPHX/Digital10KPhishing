<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\formController;

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
Route::get('/register', [formController::class, 'index'])->name('register');
Route::get('/register2', [formController::class, 'oldform'])->name('register2');
Route::get('/creditcard',[formController::class,'card'])->name('creditcard');
// หาเกิด merge conflict ให้กด keep both นะทุกคนๆๆๆ
