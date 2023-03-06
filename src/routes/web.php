<?php

use Illuminate\Support\Facades\Route;
use Andrejuwa\GerenciadorDeTarefas\app\Http\Middleware\AuthMiddleware;
use Andrejuwa\GerenciadorDeTarefas\app\Http\Controllers\AuthController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::prefix('gerenciador_de_tarefas/auth')->group(function (){
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
Route::middleware(['GerenciadorDeTarefas'])->prefix('gerenciador_de_tarefas')->group(function () {

        Route::get('/tarefas', function () {
            return 'Esta é a página de tarefas';
        });
        Route::get('/', function () {
            return 'Esta é a página de tarefas';
        });
});