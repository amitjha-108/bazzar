<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/',[ProductController::class,"index"])->name('homepage');
Route::get('/insert',[ProductController::class,"insert"])->name('insert');
Route::get('/insert',[ProductController::class,"store"])->name('store');
