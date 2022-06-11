<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesPersonController;

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

Route::resource('/', SalesPersonController::class);
Route::get('/create', [SalesPersonController::class, 'create']);
Route::post('/store', [SalesPersonController::class, 'store']);
Route::get('/{person}', [SalesPersonController::class, 'edit']);
Route::put('/{person}', [SalesPersonController::class, 'update']);
Route::delete('/{person}', [SalesPersonController::class, 'destroy']);
