<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\JobController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\Api\CompanyController;
use App\Http\Controllers\Api\FeedbackController;
use App\Http\Controllers\Api\AuthController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('jobs', JobController::class)->middleware('auth:sanctum');



Route::apiResource('feedbacks', FeedbackController::class)->middleware('auth:sanctum');;


Route::apiResource('companies', CompanyController::class)->middleware('auth:sanctum');

Route::post('Login',[AuthController::class ,'Login']);
Route::post('Register',[AuthController::class ,'Register']);
