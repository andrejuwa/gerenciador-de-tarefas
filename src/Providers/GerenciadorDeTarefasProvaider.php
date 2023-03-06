<?php


namespace Andrejuwa\GerenciadorDeTarefas\Providers;


use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class GerenciadorDeTarefasProvaider extends ServiceProvider {

    public function register()
    {

    }

    public function boot()
    {
        $router = $this->app->make(Router::class);
        $router->middlewareGroup('GerenciadorDeTarefas', [
            \Andrejuwa\GerenciadorDeTarefas\app\Http\Middleware\AuthMiddleware::class,
        ]);
        $this->mergeConfigFrom(
            __DIR__.'/../config/session.php',
            'session'
        );
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        //$this->loadControllerFrom(__DIR__ . '/../app/Http/Controllers');
        $this->loadViewsFrom(__DIR__ . '/../resources/views','GerenciadorDeTarefas');
    }
}