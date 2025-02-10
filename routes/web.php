<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// ✅ Homepage Route
Route::get('/', function () {
    return view('welcome');
})->name('home');

// ✅ Dashboard & Profile Routes (Requires Authentication)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile Management Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Authentication Routes (For Laravel Breeze)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('auth')->name('logout');

// ✅ Static Page Routes (Handled by PageController)
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// ✅ Contact Form Submission Route
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');

// ✅ Users Route (Fixing Duplicate Issue)
Route::get('/users', [UserController::class, 'index'])->name('users');

// ✅ Missing Pages Added
Route::get('/media', function () {
    return view('media');
})->name('media');

Route::get('/list', function () {
    return view('list');
})->name('list');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/stylings', function () {
    return view('stylings');
})->name('stylings');

require __DIR__ . '/auth.php';
