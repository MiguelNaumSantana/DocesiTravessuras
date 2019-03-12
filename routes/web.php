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

Route::group(['middleware'=>['auth']],function(){
    
    Route::get('/home', 'VendaController@index');
    Route::resource('dashboard', 'DashboardController');
    Route::post('dashboard/relatorio', 'DashboardController@relatoriodia')->name('relatorio');
    Route::resource('caixa', 'CaixaController');
    Route::resource('produtos', 'ProdutoController');
    Route::resource('categorias', 'CategoriaController');
    Route::resource('vendas', 'VendaController');
    Route::resource('promocao', 'PromocaoController');
    Route::get('venda-rapida', 'VendaController@rapida');
    
    
});

Auth::routes();


