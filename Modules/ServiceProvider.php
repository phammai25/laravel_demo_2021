<?php
namespace Modules;

use File;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        $listModule = array_map('basename', File::directories(__DIR__));
        foreach ($listModule as $module) {
            if (is_dir(__DIR__ . '/' . $module . '/Views')) {
                $this->loadViewsFrom(__DIR__ . '/' . $module . '/Views', $module);
            }
        }
    }

    public function register()
    {
        $listModule = array_map('basename', File::directories(__DIR__));
        foreach ($listModule as $module) {
            $class = "\Modules\\".ucfirst($module)."\\ModuleProvider";
            if(class_exists($class)) {
                $this->app->register($class);
            }

        }
        //$this->app->register(EventServiceProvider::class);
    }


    public static function getModules(){
        return array_map('basename', array_filter(glob(base_path().'/modules/*'), 'is_dir'));
    }
}
