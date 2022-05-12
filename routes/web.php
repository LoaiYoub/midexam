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

Route::get('products', [ProductController::class, 'index']);
Route::get('createProduct', [ProductController::class, 'index2']);
Route::post('delete/{id}', [ProductController::class, 'delete']);
Route::post('update/{id}', [ProductController::class, 'update']);
Route::post('edit/{id}', [ProductController::class, 'edit']);

Route::post('store', [ProductController::class, 'store']);
