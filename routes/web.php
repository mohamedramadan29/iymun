<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\front\RegisterController;
use App\Http\Controllers\front\auth\UserController;
use App\Http\Controllers\front\auth\PaymentController;
use App\Http\Controllers\dashboard\auth\AuthController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\front\auth\ForgetPasswordController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

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
            Route::get('user/confirm/{code}',  'UserConfirm')->name('user.confirm');
            Route::get('login', 'login')->name('front.login');
            Route::post('login', 'UserLogin')->name('front.login.post');
            Route::match(['get', 'post'], 'logout', 'logout')->name('front.logout');
        });

        ################### Start Forget Password Controller ##########################

        Route::controller(ForgetPasswordController::class)->group(function () {
            Route::get('forget-password', 'showForgetPasswordForm')->name('front.forget.password');
            Route::post('forget-password', 'sendResetLinkEmail')->name('front.forget.password.post');
            Route::match(['post', 'get'], 'user/change-forget-password/{code}', 'change_forget_password');
            Route::post('user/update_forget_password', 'update_forget_password')->name('front.update.forget.password');
        });
        ################### End Forget Password Controller ##########################


        Route::group(['middleware' => 'auth'], function () {
            Route::controller(UserController::class)->group(function () {
                Route::get('user/dashboard', 'dashboard')->name('user.dashboard');
            });

            ################# Start Payment #####################

            Route::controller(PaymentController::class)->group(function () {
                Route::get('payment', 'payment')->name('user.payment');
                Route::get('payment/success', 'paymentSuccess')->name('user.payment.success');
                Route::get('payment/cancel', 'paymentCancel')->name('user.payment.cancel');
            });
        });
    }
);
