<?php

use App\Http\Controllers\front\FrontController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(FrontController::class)->group(function () {
    Route::get('/', 'index')->name('front.index');
    Route::get('/about', 'about')->name('front.about');
    Route::get('/committees', 'committees')->name('front.committees');
    Route::get('/why-us', 'whyUs')->name('front.why-us');
    Route::get('/pricing', 'pricing')->name('front.pricing');
});
