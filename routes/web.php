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

Route::get('products', [TaskController::class, 'index']);
Route::get('createProduct', [TaskController::class, 'index2']);
Route::post('delete/{id}', [TaskController::class, 'delete']);
Route::post('update/{id}', [TaskController::class, 'update']);
Route::post('edit/{id}', [TaskController::class, 'edit']);

Route::post('store', [TaskController::class, 'store']);
