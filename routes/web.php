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

/** 
 * Todo: Auth 
 */

//protected routes
Route::get('/store', function() {
    return view('dashboard.store.index');
})->name('dashboard.store.index');

Route::get('/store/vehicles', function() {
    return view('dashboard.store.vehicles.index');
})->name('dashboard.store.vehicles.index');
