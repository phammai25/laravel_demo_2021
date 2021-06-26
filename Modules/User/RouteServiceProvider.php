<?php
namespace Modules\User;

use File;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->mapAdminRoutes();
    }
    public function mapAdminRoutes(){
        Route::middleware('web')
            ->namespace('\Modules\User\Admin')// do cai nay cua em nay, no se noi vao class ben trong file admin.php
            ->prefix('admin/user')
            ->group(__DIR__ . '/Routes/admin.php');

    }

}
