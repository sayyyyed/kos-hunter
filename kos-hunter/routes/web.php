<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PropertiController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [Controller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/kos', [Controller::class, 'kos'])->name('kos');
Route::get('/kontrakan', [Controller::class, 'kontrakan'])->name('kontrakan');;
Route::get('/booking-saya', [Controller::class, 'bookingSaya'])->name('booking-saya');;
Route::get('/book', [Controller::class, 'book'])->name('book');;

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('booking', [BookingController::class, 'store'])->name('admin.booking.store');


Route::prefix('admin')->group(function() {
    // List all propertis
    Route::get('properti', [PropertiController::class, 'index'])->name('admin.properti.index');

    // Add new properti
    Route::get('properti/create', [PropertiController::class, 'create'])->name('admin.properti.create');
    Route::post('properti', [PropertiController::class, 'store'])->name('admin.properti.store');

    // Edit properti
    Route::get('properti/{properti}/edit', [PropertiController::class, 'edit'])->name('admin.properti.edit');
    Route::patch('properti/{properti}', [PropertiController::class, 'update'])->name('admin.properti.update');

    // Delete properti
    Route::delete('properti/{properti}', [PropertiController::class, 'destroy'])->name('admin.properti.destroy');

    // Authentication routes
    Route::get('register', [AdminAuthController::class, 'showRegisterForm'])->name('admin.register');
    Route::post('register', [AdminAuthController::class, 'register'])->name('admin.register');
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [AdminAuthController::class, 'login']);
    Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Dashboard route
    // Dashboard route with 'auth' and 'verified' middleware
    Route::middleware(['auth:admin', 'verified'])->group(function() {
        Route::get('dashboard', [AdminAuthController::class, 'index'])->name('admin-kos.index');
    });
});


require __DIR__.'/auth.php';
