<?php

use App\Models\Location;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\TourController;
use App\Http\Controllers\CruiseController;
use App\Http\Controllers\ResortController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransportationController;
use App\Http\Controllers\Admin\TourController as AdminTourController;
use App\Http\Controllers\Admin\CruiseController as AdminCruiseController;
use App\Http\Controllers\Admin\ResortController as AdminResortController;
use App\Http\Controllers\Admin\LocationController as AdminLocationController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\TransportationController as AdminTransportationController;

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
    return view('welcome', [
        'locations' => Location::orderBy('name', 'asc')->get()
    ]);
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('tour_booking', [DashboardController::class, 'tour_booking'])->name('tour_booking');
    Route::get('resort_booking', [DashboardController::class, 'resort_booking'])->name('resort_booking');
    Route::get('cruise_booking', [DashboardController::class, 'cruise_booking'])->name('cruise_booking');
    Route::get('transportation_booking', [DashboardController::class, 'transportation_booking'])->name('transportation_booking');
    Route::get('status_update/{booking}/{status}', [DashboardController::class, 'status_update'])->name('status_update');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::controller(ProfileController::class)->prefix('reports')->name('reports.')->group(function () {
    // });

    Route::middleware('admin')->prefix('admin')->name('admin.')->group(function () {
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
        Route::get('tour_booking', [AdminDashboardController::class, 'tour_booking'])->name('tour_booking');
        Route::get('resort_booking', [AdminDashboardController::class, 'resort_booking'])->name('resort_booking');
        Route::get('cruise_booking', [AdminDashboardController::class, 'cruise_booking'])->name('cruise_booking');
        Route::get('transportation_booking', [AdminDashboardController::class, 'transportation_booking'])->name('transportation_booking');
        Route::get('status_update/{booking}/{status}', [AdminDashboardController::class, 'status_update'])->name('status_update');

        Route::resource('location', AdminLocationController::class);
        Route::resource('tour', AdminTourController::class);
        Route::resource('resort', AdminResortController::class);
        Route::resource('transportation', AdminTransportationController::class);
        Route::resource('cruise', AdminCruiseController::class);
    });
    Route::resource('booking', BookingController::class);
});

Route::resource('tour', TourController::class);
Route::resource('resort', ResortController::class);
Route::resource('transportation', TransportationController::class)->except('index');
Route::controller(TransportationController::class)->prefix('transportation')->name('transportation.')->group(function () {
    Route::get('transportation/locations', 'locations')->name('locations');
    Route::get('index/{location}', 'index')->name('index');
});
Route::resource('cruise', CruiseController::class);


require __DIR__ . '/auth.php';
