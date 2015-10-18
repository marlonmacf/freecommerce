<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as' => 'home', 'uses' => 'Controle\HomeController@index']);

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'where' => ['id' => '[0-9]+']], function () {
    Route::resource('categorias', 'Admin\CategoriaController');
    Route::resource('competencias', 'Admin\CompetenciaController');
});

Route::group(['prefix' => 'busca'], function () {
    Route::get('servico/{servico}', ['as' => 'busca.servico', 'uses' => 'Controle\BuscaController@buscaServico']);
    Route::get('servicos/competencia/{competencia}', ['as' => 'busca.servicos.competencias', 'uses' => 'Controle\BuscaController@buscaServicosCompetencia']);
    Route::get('servicos', ['as' => 'busca.servicos.tags', 'uses' => 'Controle\BuscaController@buscaServicosTag']);
    Route::get('servicos/{competenciaTag}', ['as' => 'busca.servicos.competencias.tags', 'uses' => 'Controle\BuscaController@buscaServicosCompetenciaTag']);
});

Route::group(['prefix' => 'controle', 'middleware' => 'auth'], function () {
    Route::resource('perfil', 'Controle\PerfilController');
    Route::resource('servico', 'Controle\ServicoController');
    Route::resource('venda', 'Controle\VendaController');
    Route::resource('solicitacao', 'Controle\SolicitacaoController');
    Route::resource('pos-venda', 'Controle\PosVendaController');
    Route::get('carrinho', ['as' => 'controle.carrinho.index', 'uses' => 'Controle\CarrinhoController@index']);
    Route::post('carrinho/{servico}', ['as' => 'controle.carrinho.add', 'uses' => 'Controle\CarrinhoController@add']);
    Route::get('carrinho/destroy', ['as' => 'controle.carrinho.destroy', 'uses' => 'Controle\CarrinhoController@destroy']);
    Route::get('carrinho/finalizar', ['as' => 'controle.carrinho.finalizar', 'uses' => 'Controle\CarrinhoController@finalizar']);
});

//Route::resource('photo', 'PhotoController');
//
//Verb	        Path	                Action	    Route Name
//GET	        /photo	                index	    photo.index
//GET	        /photo/create	        create	    photo.create
//POST	        /photo	                store	    photo.store
//GET	        /photo/{photo}	        show	    photo.show
//GET	        /photo/{photo}/edit	    edit	    photo.edit
//PUT/PATCH	    /photo/{photo}	        update	    photo.update
//DELETE	    /photo/{photo}	        destroy	    photo.destroy