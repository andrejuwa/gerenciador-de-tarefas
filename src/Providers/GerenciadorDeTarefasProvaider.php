<?php


namespace Andrejuwa\GerenciadorDeTarefas\Providers;


use Illuminate\Support\ServiceProvider;

class GerenciadorDeTarefasProvaider extends ServiceProvider {

    public function register()
    {

    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}