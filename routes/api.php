<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::post('zip-codes/import/txt', ZipCodes\ImportFromTxtController::class);
Route::get('zip-codes/{zipCode}', ZipCodes\GetZipCodeController::class)->where('id', '[0-9]+');
