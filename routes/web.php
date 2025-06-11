<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;
use App\Http\Controllers\AcaraController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('tiketin')->group(function () {
    Route::get('/home', fn() => view('home'))->name('tiketin.home');
    Route::get('/explore', [AcaraController::class, 'explore'])->name('tiketin.explore');    
    Route::get('/detail/{id}', [AcaraController::class, 'detail'])->name('tiketin.detail');
    Route::get('/about', fn() => view('aboutus'))->name('tiketin.about');
    Route::get('/contact', fn() => view('contact'))->name('tiketin.contact');
});

Route::get('/qr', [QrController::class, 'index'])->name('qr.form');
Route::post('/qr', [QrController::class, 'generate'])->name('qr.generate');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
