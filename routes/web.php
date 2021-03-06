<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Users\{
    VehiclesController
};
use App\Http\Controllers\Admin\{
    MenuController
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

    Route::middleware(['isAdmin'])->prefix('admin')->name('dashboard.admin.')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menus.index');
    });
});

//auth routes
require __DIR__.'/auth.php';
