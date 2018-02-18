<?php

namespace App\Providers;

use Illuminate\Support\Facades\Auth;
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
     * This namespace is applied to your api controller routes.
     *
     * @var string
     */
    protected $apiControllersNamespace = 'App\Http\Controllers\Api';

    /**
     * This namespace is applied to your web controller routes.
     *
     * @var string
     */
    protected $webControllersNamespace = 'App\Http\Controllers\Web';

    /**
     * This namespace is applied to your dashboard controller routes.
     *
     * @var string
     */
    protected $dashboardControllersNamespace = 'App\Http\Controllers\Dashboard';

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

        $this->mapDashboardRoutes();

        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
            ->namespace($this->webControllersNamespace)
            ->group(base_path('routes/web.php'));
    }

    /**
     * Define the "dashboard" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapDashboardRoutes()
    {
        Route::middleware(['web', 'auth'])
            ->prefix('dashboard')
            ->as('dashboard.')
            ->namespace($this->dashboardControllersNamespace)
            ->group(base_path('routes/dashboard.php'));

        Route::middleware('web')
            ->prefix('dashboard')
            ->namespace($this->dashboardControllersNamespace)
            ->group(function () {
                Auth::routes();
            });
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->as('api.')
            ->namespace($this->apiControllersNamespace)
            ->group(base_path('routes/api.php'));

        Route::prefix('api/auth')
            ->middleware('authorization')
            ->as('api.auth.')
            ->namespace($this->apiControllersNamespace);
    }
}
