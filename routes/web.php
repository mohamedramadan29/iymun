<?php

use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\RegisterController;
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
    Route::get('/venue', 'venue')->name('front.venue');
    Route::get('/venue', 'venue')->name('front.venue');
    Route::get('/partners', 'partners')->name('front.partners');
    Route::get('/faq', 'faq')->name('front.faq');
    Route::get('/contact', 'contact')->name('front.contact');
});


Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register')->name('front.register');
    Route::post('/register/post', 'registerPost')->name('front.register.post');
    Route::get('login', 'login')->name('front.login');
});
