<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use www\home\config as HomeConfig;
use www\products\config as ProductConfig;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(HomeConfig::DIR_TEMPLATES, 'home');
        $this->loadViewsFrom(ProductConfig::DIR_TEMPLATES, 'products');

        $this->loadViewsFrom(base_path('src/www/__templates'), 'templates');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
