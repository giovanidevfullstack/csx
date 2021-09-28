<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.welcome');
})->name('/');

//landing routes

//public store routes

//protected routes
Route::middleware(['auth'])->group(function (){
    Route::get('/store', function() {
        return view('dashboard.store.index');
    })->name('dashboard.store.index');

    Route::get('/store/vehicles', function() {
        return view('dashboard.vehicles.index');
    })->name('dashboard.vehicles.index');
});

//auth routes
require __DIR__.'/auth.php';
