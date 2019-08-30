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
    return view('welcome');
});

Route::get('/produtos', 'MeuControlador@produtos');

Route::resource('/clientes', 'ClienteControlador');

/*
 Route::get('/componente', function () {
    return view('pagina');
});

Route::get('primeiraview', function(){
   return view('minhaview'); 
});

Route::get('/produtos', 'ProdutoControlador@listar');

//agrupamento de rotas
Route::prefix('/app')->group(function(){

    Route::get('/user', function(){
        return view('user');
    });

    Route::get('/home', function(){
        return view('home');
    });

    Route::get('/profile', function(){
        return view('profile');
    });
});
//fim do agrupamento de rotas
 */