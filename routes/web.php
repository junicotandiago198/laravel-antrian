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

Route::get('/', [App\Http\Controllers\AntrianController::class, 'index']);
Route::get('/antri_cs/{id}/{id1}/{id2}', [App\Http\Controllers\AntrianController::class, 'antri_cs']);
Route::get('/antri_teller1/{id}/{id1}/{id2}', [App\Http\Controllers\AntrianController::class, 'teller1']);
Route::get('/antri_teller2/{id}/{id1}/{id2}', [App\Http\Controllers\AntrianController::class, 'teller2']);