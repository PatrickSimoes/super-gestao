<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\TesteController;

Route::get('/', 'App\Http\Controllers\PrincipalController@principal')->name('site.index');

Route::get('/contato', 'App\Http\Controllers\Contato@contato')->name('site.contato');

Route::post('/contato', 'App\Http\Controllers\Contato@contato')->name('site.contato');

Route::get('/sobre-nos', 'App\Http\Controllers\SobreNos@sobreNos')->name('site.sobre-nos');

Route::get('/login', function(){ return 'Login';})->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('app.fornecedores');
    Route::get('/clientes', function(){ return 'Clientes';})->name('app.clientes');
    Route::get('/produtores', function(){ return 'Produtores';})->name('app.produtores');
});

/* Route::get('/teste/{p1}/{p2}', 'App\Http\Controllers\TesteController@teste')->name('teste');
   Route::get('/teste/{p1}/{p2}', [TesteController::class, 'teste'])->name('teste'); 
 */

Route::fallback(function () {
   echo 'A rota acessada não existe. <a href="'.route('site.index'). '">click aqui</a>';
});