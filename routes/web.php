
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SleepRecordController;

// Public page
Route::get('/', function () {
    return view('home');
});

// Guest-only pages
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'show'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// Authenticated pages only
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/sleep-records', [SleepRecordController::class, 'index'])
        ->name('sleep-records.index');

    Route::post('/sleep-records', [SleepRecordController::class, 'store'])
        ->name('sleep-records.store');

    Route::delete('/sleep-records/{sleepRecord}', [SleepRecordController::class, 'destroy'])
        ->name('sleep-records.destroy');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
