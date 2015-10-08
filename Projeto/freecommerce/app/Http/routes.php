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
    Route::get('servico/{servico}', ['as' => 'busca.servico', 'uses' => 'Controle\ServicoController@buscaServico']);
    Route::get('servicos/competencia/{competencia}', ['as' => 'busca.servicos.competencias', 'uses' => 'Controle\ServicoController@buscaServicosCompetencia']);
    Route::get('servicos/{tag}', ['as' => 'busca.servicos.tags', 'uses' => 'Controle\ServicoController@buscaServicosTag']);
});

Route::group(['prefix' => 'controle', 'middleware' => 'auth'], function () {
    Route::resource('perfil', 'Controle\PerfilController');
    Route::resource('servico', 'Controle\ServicoController');
    Route::resource('venda', 'Controle\VendaController');
    Route::resource('solicitacao', 'Controle\SolicitacaoController');
    Route::resource('pos-venda', 'Controle\PosVendaController');
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