<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SobreNosController;
use App\Http\Controllers\TesteController;

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index')->middleware('log.acesso');
//Route::middleware(LogAcessoMiddleware::class)->get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index')->middleware(LogAcessoMiddleware::class);
//Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index')->middleware(LogAcessoMiddleware::class);//Outra Forma, mas não segue um ordem lógica.

Route::post('/', [ContatoController::class, 'salvar'])->name('site.index');

Route::get('/sobre-nos', [SobreNosController::class, 'sobreNos'])->name('site.sobrenos');

Route::get('/contato', [ContatoController::class, 'contato'])->name('site.contato');
Route::get('/contato', [ContatoController::class, 'salvar'])->name('site.contato');

Route::get('/login/{erro?}', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

Route::middleware('autenticacao:padrao, gerente')->prefix('/app')->group(function() {
   Route::get('/home', [HomeController::class, 'index'])->name('app.home');      
   Route::get('/sair', [LoginController::class, 'sair'])->name('app.sair');      
   Route::get('/cliente', [ClienteController::class, 'index'])->name('app.cliente');         
   
   Route::get('/fornecedor', [FornecedorController::class, 'index'])->name('app.fornecedor');
   Route::post('/fornecedor/listar',  [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
   Route::get('/fornecedor/listar',  [FornecedorController::class, 'listar'])->name('app.fornecedor.listar');
   Route::get('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');      
   Route::post('/fornecedor/adicionar', [FornecedorController::class, 'adicionar'])->name('app.fornecedor.adicionar');      
   Route::get('/fornecedor/editar/{id}/{msg?}', [FornecedorController::class, 'editar'])->name('app.fornecedor.editar');      
   Route::get('/fornecedor/excluir/{id}', [FornecedorController::class, 'excluir'])->name('app.fornecedor.excluir');      
   
   Route::get('/produto', [ProdutoController::class, 'index'])->name('app.produto');
});
 
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function () {
   echo 'A rota acessada não existe. <a href="'.route('site.index'). '">click aqui</a>';
});