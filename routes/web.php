<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/avisos', function () {
    return view('avisos', ['nome' => 'Bruno', 'mostrar' => 'true', 'avisos' => [['id' => 1, 'texto' => 'Aviso 1'],
                                                                                ['id' => 2, 'texto' => 'Aviso 2']]]);
});

Route::group(['prefix' => 'clientes'], function () {

    Route::get('/listar', 'ClientController@listar')->middleware('auth')->name('clientes');

});

Route::group(['prefix' => 'produtos'], function () {

    Route::get('/listar', 'ProductController@listar')->middleware('auth')->name('produtos');

});

Route::group(['middleware' => ['auth']],function(){
    Route::resource('users','UserController');
    Route::resource('roles','RoleController');

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


