<?php
namespace Modules\Blog;

use File;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $this->mapEventRoutes();
    }
    public function mapEventRoutes(){
        Route::middleware('web')
            ->namespace('\Modules\Blog\Event')// do cai nay cua em nay, no se noi vao class ben trong file admin.php
            ->prefix('blog/event')
            ->group(__DIR__ . '/Routes/event.php');

    }

}
