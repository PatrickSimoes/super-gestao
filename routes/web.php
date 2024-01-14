<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\TesteController;

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');
Route::post('/', [ContatoController::class, 'salvar'])->name('site.index');

Route::get('/sobre-nos', 'App\Http\Controllers\SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/contato', 'App\Http\Controllers\ContatoController@contato')->name('site.contato');
Route::post('/contato', 'App\Http\Controllers\ContatoController@salvar')->name('site.contato');

Route::get('/login', function(){return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
   Route::get('/clientes', function(){return 'Clientes';})->name('app.clientes');
   Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
   Route::get('/produtos', function(){return 'produtos';})->name('app.produtos');
});
 
Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('site.teste');

Route::fallback(function () {
   echo 'A rota acessada não existe. <a href="'.route('site.index'). '">click aqui</a>';
});