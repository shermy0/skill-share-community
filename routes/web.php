<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::view('/favorit', 'client.favorites')->name('favorites.index');
Route::view('/pesanan-saya', 'client.myorders')->name('myorders.index');


Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'jasa.dashboard')->name('dashboard');
    Route::get('/profil', [ProfilController::class, 'index'])->name('profile.index');
    Route::view('/pesanan', 'orders.index')->name('orders.index');
    Route::view('/chat', 'chat.index')->name('chat.index');
});
