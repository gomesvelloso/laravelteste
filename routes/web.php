<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    #return view('welcome');
    return "Olá, seja bem vindo ao curso.";
});

Route::get('/contato/{nome}/{categoria_id}', function(string $nome, int $categoria_id=1){
    echo "Estamos aqui ".$nome.' - '.$categoria_id;
})->where('nome', '[A-Za-z]+')->where('categoria_id', '[0-9]+'); //ou seja, categoria id deve estar entre 0 e 9 e deve ter pelo menos 1 [+]
*/

Route::get('/', 'PrincipalController@principal')->name('site.index');
Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');
Route::get('/contato', 'ContatoController@contato')->name('site.contato');
Route::post('/contato', 'ContatoController@contato')->name('site.contato');

Route::get('/login', function(){ return 'Página de login'; })->name('site.login');

Route::prefix('/app')->group(function(){

    Route::get('/clientes', function(){ return 'Página de Clientes'; })->name('app.clientes');
    Route::get('/fornecedores', 'FornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos', function(){ return 'Página de produtos'; })->name('app.produtos');

});

Route::get('/rota1', function(){ return 'Rota1'; })->name('site.rota1');
Route::get('/rota2', function(){ return redirect()->route('site.rota1'); })->name('site.rota2');

/**
 * Se uma rota não for encontrada, podemos usar o fallback para exibir uma mensagem costumizada
 * ou fazer um redirecionamento automático para um endereço xyz
 */
Route::fallback(function(){
    //return redirect()->route('site.index');
    echo 'Página não encontrada. <a href="/">Clique aqui</a> para Voltar';
});

/**
 * Modo de fazer redirecionamento pela rota. Usar o Route::redirect()
 * Onde o primeiro parametro é a rota atual e a segunda é a rota que será redirecionada
 Route::redirect('/rota2', '/rota1');
*/

Route::get('/teste/{p1}/{p2}', 'TesteController@teste')->name('teste');


