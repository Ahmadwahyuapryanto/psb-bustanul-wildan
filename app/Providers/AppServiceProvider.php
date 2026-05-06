<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // 1. Kita panggil fungsi URL dari Laravel

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 2. Jika aplikasi kita BUKAN di komputer lokal, paksa gunakan HTTPS
        if (env('APP_ENV') !== 'local') {
            URL::forceScheme('https');
        }
    }
}