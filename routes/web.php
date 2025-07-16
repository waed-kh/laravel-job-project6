<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobViewController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\FeedbackController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/help', function () {
    return view('jobs.help');
});
Route::get('/f', function () {
    return view('jobs.fq');
});
Route::get('/set', function () {
    return view('jobs.settenig');
});


// routes/web.php



Route::middleware('auth')->group(function () {
    Route::get('/settings', [NotificationController::class, 'showSettings'])->name('settings.show');
    Route::post('/settings/language', [NotificationController::class, 'updateLanguage'])->name('settings.language.update');
    Route::post('/settings/notifications', [NotificationController::class, 'updateNotifications'])->name('settings.notifications.update');
});



Route::get('/help-feedback', [FeedbackController::class, 'showForm'])->name('feedback.form');
Route::post('/help-feedback', [FeedbackController::class, 'submitForm'])->name('feedback.submit');



Route::get('/jobs', [JobViewController::class, 'index'])->name('jobs.index');

Route::get('/job/{id}', [JobViewController::class, 'show'])->name('jobs.show');
Route::get('/company', [JobViewController::class, 'showCompany'])->name('company.page');

Route::post('/jobs/{id}/save', [JobViewController::class, 'saveJob'])->name('jobs.save');

Route::get('/jobs/latest-logins', [JobViewController::class, 'latestLogins'])->name('jobs.latestLogins');

Route::get('/saved-jobs', [JobViewController::class, 'savedJobs'])->name('jobs.saved');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
