<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Users\{
    DashboardController,
    VehiclesController
};

Route::get('/', function () {
    return view('landing.welcome');
})->name('/');

//landing routes

//public store routes

//protected routes
Route::middleware(['auth'])->group(function (){
    Route::prefix('store')->name('dashboard.')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('store.index');
        Route::get('/vehicles', [VehiclesController::class, 'index'])->name('vehicles.index');
    });
});

//auth routes
require __DIR__.'/auth.php';
