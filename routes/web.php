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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();


Route::group(['middleware' => 'auth'],
    function ()
    {
        Route::get('/home', 'HomeController@index')->name('home');

        Route::get('user/{user}', 'UserController@index')->name('index');

        Route::resource('instituicao', 'InstituicaoController');
        Route::resource('pessoa', 'PessoaController');
    }
);


