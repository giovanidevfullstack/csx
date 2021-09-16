<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing.welcome');
})->name('/');

//landing routes

//protected routes (breeze)
Route::get('/store', function() {
    return view('panel.store.index');
})->name('panel.store.index');

Route::get('/store/vehicles', function() {
    return view('panel.store.vehicles.index');
})->name('panel.store.vehicles.index');
