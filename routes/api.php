<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//USERS
// Route::get('/users', function () {
//     return 'USERS';
// });

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers'], function () {
    Route::apiResource('customers', 'CustomerController');
    Route::apiResource('classes', 'ClassesController');
});
