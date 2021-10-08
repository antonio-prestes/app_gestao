<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\FornecedorController;
use App\Http\Middleware\LogAcessoMiddleware;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index')->middleware('log.acesso');
Route::get('/sobre', [SobreNosController::class, 'sobre'])->name('site.sobre');
Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::post('/contato', [ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'auth'])->name('site.login');

Route::prefix('/app')->middleware('autenticacao:padrao')->group(function () {
    Route::get('/clientes', function () {return 'clientes';})->name('app.clientes');
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/produtos', function () {return 'produtos';})->name('app.produtos');
});

Route::fallback(function () {
    echo 'A pagina acessada não existe, <a href="' . route('site.index') . '">clique aqui</a> para ser redirecionado';
});
