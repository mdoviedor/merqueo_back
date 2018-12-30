<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->homeRoutes();
        $this->productRoutes();

        //
    }

    protected function homeRoutes()
    {
        Route::middleware(['web'])
            ->group(base_path('src/www/home/routes/routes.php'));
    }

    protected function productRoutes()
    {
        Route::middleware(['web'])
            ->group(base_path('src/www/products/routes/routes.php'));
    }

}
