<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Home Route
Route::get('/', function () {
    return view('welcome');
});

// User List Route (Using Controller)
Route::get('/users', [UserController::class, 'index']);

// Dashboard Route (Requires Authentication)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile Routes (Requires Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Direct View Routes (No Controller Required)
Route::view('/form', 'auth.register');
Route::view('/list', 'list');
Route::view('/media', 'media');
Route::view('/blog', 'blog');
Route::view('/styling', 'styling');

require __DIR__ . '/auth.php';
