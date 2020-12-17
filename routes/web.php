<?php

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

Route::get('/', function () {
    //return view('welcome');
    return view('auth.login');
});

Auth::routes();

//Pagina principal
Route::get('/home', 'HomeController@index')->name('home');

//Muestra formulario de creacion clientes
Route::get('/provisionamiento', 'ProvisionamientoController@showForm')->name('provisionamiento');
//Muestra otro formulario de Aprovisionamiento
Route::get('/provisionar', 'ProvisionamientoController@getForm')->name('provisionar');


//Eliminar
//Route::post('/deleteUser/{id}', 'RegisterController@deleteUser')->name('eliminarUsuario');

//Para eliminar Usuario
Route::get('users/{id}/destroy',[
    'uses'	=>	'Auth\RegisterController@deleteUser',
    'as'	=>	'users.destroy'
]);


//Para editar Usuario
Route::get('users/{id}/editForm',[
    'uses'	=>	'Auth\RegisterController@editUser',
    'as'	=>	'users.edit'
]);


//Para actualizar datos
Route::post('users/update',[
    'uses'	=>	'Auth\RegisterController@update',
    'as'	=>	'users.update'
]);
