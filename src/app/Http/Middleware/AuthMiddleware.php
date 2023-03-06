<?php

namespace Andrejuwa\GerenciadorDeTarefas\app\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthMiddleware extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    public function handle($request, Closure $next,  ...$guards)
    {
        if (!Auth::check()) {
            return redirect('/gerenciador_de_tarefas/auth/login');
        }

        return $next($request);
    }
}
