<?php

use App\Http\Controllers\{ProfileInformationController, TimelineController, StatusController};
use Illuminate\Support\Facades\Route;



Route::view('/', 'welcome');


Route::middleware('auth')->group(function () {

    Route::get('timeline', TimelineController::class)->name('timeline');
    Route::post('status', [StatusController::class, 'store'])->name('statuses.store');
    Route::get('profile/{user}', ProfileInformationController::class)->name('profile')->withoutMiddleware('auth');
});


require __DIR__ . '/auth.php';
