<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobViewController;
use App\Http\Controllers\NotificationController;
Route::get('/', function () {
    return view('welcome');
});



Route::get('/jobs', [JobViewController::class, 'index'])->name('jobs.index');

Route::get('/job/{id}', [JobViewController::class, 'show'])->name('jobs.show');
Route::get('/company', [JobViewController::class, 'showCompany'])->name('company.page');
Route::post('/jobs/{id}/toggle-save', [JobViewController::class, 'toggleSave'])->name('jobs.toggleSave');
Route::get('/jobs/latest-logins', [JobViewController::class, 'latestLogins'])->name('jobs.latestLogins');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
