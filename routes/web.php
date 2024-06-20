<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('categories', App\Http\Controllers\CategoryController::class);
Route::resource('dishes', App\Http\Controllers\DishController::class);
Route::resource('tables', App\Http\Controllers\TableController::class);
Route::resource('orders', App\Http\Controllers\OrderController::class);