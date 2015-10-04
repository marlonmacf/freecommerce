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

Route::get('/', function () {
    return view('app.home.index.index');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController'
]);

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'where' => ['id' => '[0-9]+']], function () {
    Route::resource('categorias', 'admin\CategoriaController');
    Route::resource('competencias', 'admin\CompetenciaController');
});

Route::group(['prefix' => 'busca'], function () {
    Route::get('servico', ['as' => 'busca.servicos', 'uses' => 'controle\ServicoController@busca']);
});

Route::group(['prefix' => 'controle', 'middleware' => 'auth'], function () {
    Route::resource('perfil', 'controle\PerfilController');
    Route::resource('servico', 'controle\ServicoController');
    Route::resource('venda', 'controle\VendaController');
    Route::resource('solicitacao', 'controle\SolicitacaoController');
    Route::resource('pos-venda', 'controle\PosVendaController');
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