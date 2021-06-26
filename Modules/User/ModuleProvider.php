<?php
namespace Modules\User;

use File;

class ModuleProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/Migration');
    }
    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
