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
        $this->mapApiRoutes();

        $this->mapWebRoutes();

        //
    }

//    /**
//     * Define the "web" routes for the application.
//     *
//     * These routes all receive session state, CSRF protection, etc.
//     *
//     * @return void
//     */
//    protected function mapWebRoutes()
//    {
//        Route::middleware('web')
//             ->namespace($this->namespace)
//             ->group(base_path('routes/web.php'));
//    }
//
//    /**
//     * Define the "api" routes for the application.
//     *
//     * These routes are typically stateless.
//     *
//     * @return void
//     */
//    protected function mapApiRoutes()
//    {
//        Route::prefix('api')
//             ->middleware('api')
//             ->namespace($this->namespace)
//             ->group(base_path('routes/api.php'));
//    }


    protected function homeRoutes()
    {
        Route::middleware(['web'])
            ->group(base_path('src/www/home/routes/routes.php'));
    }

    protected function clientRoutes()
    {
        Route::prefix('client')
            ->middleware(['web'])
            ->group(base_path('src/www/client/routes/routes.php'));
    }

    protected function categoriesRoutes()
    {
        Route::prefix('admin/categories')
            ->middleware(['web', 'auth', 'role:admin'])
            ->group(base_path('src/www/categories/routes/routes.php'));
    }

    protected function subCategoriesRoutes()
    {
        Route::prefix('admin/sub_categories')
            ->middleware(['web', 'auth', 'role:admin'])
            ->group(base_path('src/www/sub_categories/routes/routes.php'));
    }

    protected function testRoutes()
    {
        Route::prefix('admin/test')
            ->middleware(['web', 'auth', 'role:admin'])
            ->group(base_path('src/www/test/routes/routes.php'));
    }
}
