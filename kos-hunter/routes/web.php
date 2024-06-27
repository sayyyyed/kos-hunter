<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PropertiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KosController;
use App\Http\Controllers\KontrakanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kos', [KosController::class, 'index'])->name('kos');
Route::get('/kontrakan', [KontrakanController::class, 'index'])->name('kontrakan');
Route::get('/booking-saya', [BookingController::class, 'index'])->name('booking-saya')->middleware('auth');
Route::get('/book/{properti}', [BookingController::class, 'create'])->name('book')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');
    Route::delete('/booking/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');
});

Route::prefix('admin')->group(function() {
    Route::get('properti', [PropertiController::class, 'index'])->name('admin.properti.index');
    Route::get('properti/create', [PropertiController::class, 'create'])->name('admin.properti.create');
    Route::post('properti', [PropertiController::class, 'store'])->name('admin.properti.store');
    Route::get('properti/{properti}/edit', [PropertiController::class, 'edit'])->name('admin.properti.edit');
    Route::patch('properti/{properti}', [PropertiController::class, 'update'])->name('admin.properti.update');
    Route::delete('properti/{properti}', [PropertiController::class, 'destroy'])->name('admin.properti.destroy');

    Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('register', [AdminAuthController::class, 'register']);
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    Route::middleware(['auth:admin'])->group(function() {
        Route::get('properti', [PropertiController::class, 'index'])->name('admin.properti.index');
        Route::post('booking', [BookingController::class, 'adminStore'])->name('admin.booking.store');
    });
});

Route::get('/properti/{id}', [PropertiController::class, 'show'])->name('properti.show');
Route::get('/api/properti/{properti}/room-count', [PropertiController::class, 'getRoomCount']);
Route::get('/dashboard', DashboardController::class)->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';
