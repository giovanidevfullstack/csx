<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing.welcome');
})->name('/');

//landing routes

//protected routes
Route::get('/store', function() {
    return view('dashboard.store.index');
})->name('dashboard.store.index');

Route::get('/store/vehicles', function() {
    return view('dashboard.store.vehicles.index');
})->name('dashboard.store.vehicles.index');


/** 
 * Todo: Auth 
 */
//auth routes
require __DIR__.'/auth.php';
