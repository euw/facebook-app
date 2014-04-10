<?php namespace Euw\FacebookApp\Modules\Providers;

use Illuminate\Support\ServiceProvider;
use Euw\FacebookApp\Modules\Texts\Models\Text;
use Euw\FacebookApp\Modules\Texts\Repositories\EloquentTextRepository;

class ModuleProvider extends ServiceProvider
{

    /**
     * Register
     */
    public function register()
    {
        $this->registerTextRepository();
    }

    /**
     * Register Post Repository
     */
    public function registerTextRepository()
    {
        $this->app->bind('Euw\FacebookApp\Modules\Texts\Repositories\TextRepository', function ($app) {
            return new EloquentTextRepository(new Text, $app['context']);
        });

    }


}