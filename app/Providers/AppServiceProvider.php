<?php

namespace App\Providers;

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
>>>>>>> feature/setting
=======
>>>>>>> feature/Projects
=======
>>>>>>> feature/Employee
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
<<<<<<< HEAD
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
=======
    public function boot(): void
    {
        //
>>>>>>> feature/Projects
=======
    public function boot(): void
    {
        //
>>>>>>> feature/Employee
    }
}
