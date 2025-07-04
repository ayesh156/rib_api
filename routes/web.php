<?php

use App\Http\Controllers\Api\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('customer/register', [CustomerController::class, 'showRegisterForm'])->name('customer.register.form');
Route::post('customer/register', [CustomerController::class, 'register'])->name('customer.register');
Route::get('/', [CustomerController::class, 'showLoginForm'])->name('customer.login.form');
Route::post('customer/login', [CustomerController::class, 'login'])->name('customer.login');

Route::get('profile', function () {
    return view('profile');
})->name('profile');

