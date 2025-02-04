<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeController::class, 'home'])->name('home');
Route::get('/tentang-kami', [FeController::class, 'about'])->name('about');
Route::get('/guru-staff', [FeController::class, 'guru'])->name('guru');
Route::get('/artikel', [FeController::class, 'artikel'])->name('artikel');
Route::get('/galeri', [FeController::class, 'galeri'])->name('galeri');
Route::get('/contact', [FeController::class, 'contact'])->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
