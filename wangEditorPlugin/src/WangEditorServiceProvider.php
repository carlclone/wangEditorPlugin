<?php
namespace Getui\Contact;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;
class WangEditorServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    public function boot()
    {
        $this->loadViewsFrom(realpath(__DIR__.'/../views'), 'wang_editor');
        $this->setupRoutes($this->app->router);
        // this for conig
        $this->publishes([
            __DIR__.'/config/wang_editor.php' => config_path('wang_editor.php'),
        ]);
    }

    /**
     * Define the routes for the application.
     *
     * @param \Illuminate\Routing\Router $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Carlclone\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }

    public function register()
    {
        $this->registerContact();
        config([
            'config/wang_editor.php',
        ]);
    }
/*    private function registerContact()
    {
        $this->app->bind('contact',function($app){
            return new Contact($app);
        });
    }*/
}