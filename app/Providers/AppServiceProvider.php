<?php

namespace App\Providers;

use App\View\Components\content;
use App\View\Components\footer;
use App\View\Components\style;
use App\View\Components\menu;
use App\View\Components\navbar;
use App\View\Components\scripts;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('footer', footer::class);
        Blade::component('navbar', navbar::class);
        Blade::component('menu', menu::class);
        Blade::component('style', style::class);
        Blade::component('scripts', scripts::class);
        Blade::component('content-hader-page', content::class);
    }
}
