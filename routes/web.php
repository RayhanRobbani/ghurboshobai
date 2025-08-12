<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\ResortController as AdminResortController;
use App\Http\Controllers\Admin\TourController as AdminTourController;
use App\Http\Controllers\Admin\TransportationController as AdminTransportationController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\TransportationController;
use Illuminate\Support\Facades\Artisan;

Route::get('/clean', function () {
    Artisan::call('optimize:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');
    Artisan::call('storage:link');

    return 'done';
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::controller(ProfileController::class)->prefix('reports')->name('reports.')->group(function () {
    // });
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

        Route::resource('tour', AdminTourController::class);
        Route::resource('resort', AdminResortController::class);
        Route::resource('transportation', AdminTransportationController::class);
    });
});

Route::resource('tour', TourController::class);
Route::resource('resort', ResortController::class);
Route::resource('transportation', TransportationController::class);

require __DIR__ . '/auth.php';
