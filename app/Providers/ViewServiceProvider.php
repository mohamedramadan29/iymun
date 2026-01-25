<?php

namespace App\Providers;

use App\Models\dashboard\Setting;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         view()->share([
            'setting' => Setting::first(),

        ]);
    }
}
