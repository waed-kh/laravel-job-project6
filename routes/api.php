<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Api\CompanyController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('jobs', JobController::class);



Route::apiResource('companies', CompanyController::class);
