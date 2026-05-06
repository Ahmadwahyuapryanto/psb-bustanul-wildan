<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Tambahkan pemanggilan URL Facade

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
        // Paksa aplikasi menggunakan HTTPS jika berjalan di Vercel/Production
        if(config('app.env') !== 'local') {
            URL::forceScheme('https');
        }
    }
}