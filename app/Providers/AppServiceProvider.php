<?php

namespace App\Providers;

<<<<<<< HEAD
=======
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
>>>>>>> feature/setting
use Illuminate\Support\ServiceProvider;

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
<<<<<<< HEAD
    public function boot(): void
    {
        //
=======
    public function boot()
    {
        Paginator::useBootstrap();
        $settings = Setting::checkSettings();
        View()->share([
            'setting'=>$settings,
        ]);
>>>>>>> feature/setting
    }
}
