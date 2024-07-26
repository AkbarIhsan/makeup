<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MkartistController;
use App\Http\Controllers\ProfileMuaController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Route
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'index'])->name('login_admin');
    Route::post('/login', [AdminController::class, 'login'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('admin');
    ROute::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout')->middleware('admin');
});
// End Admin Route

// Mkartist Route
Route::prefix('mkartist')->group(function () {
    Route::get('/login', [MkartistController::class, 'index'])->name('login_mkartist');
    Route::post('/login', [MkartistController::class, 'login'])->name('mkartist.login');
    Route::get('/dashboard', [MkartistController::class, 'dashboard'])->name('mkartist.dashboard')->middleware('mkartist');
    Route::resource('/mua', ProfileMuaController::class)->middleware('mkartist');
    Route::post('/mkartist/logout', [MkartistController::class, 'logout'])->name('mkartist.logout')->middleware('mkartist');
});
// End Mkartist Route

require __DIR__.'/auth.php';
