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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

// CLIENTES
Route::prefix('/clientes')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Admin\ClienteController')
        ->group(function()
        {
            route::get('/', 'index')->name('clientes.index');
            route::get('/create', 'create')->name('clientes.create');
            route::post('/', 'store')->name('clientes.store');
            route::get('/{cliente}', 'show')->name('clientes.show');
            route::get('/{cliente}/edit', 'edit')->name('clientes.edit');
            route::delete('/{cliente}', 'destroy')->name('clientes.destroy');
            route::get('/load_cidades/{estado}', 'loadCidades');
            route::get('/load_cities/{country}', 'loadCities');
            route::any('/inativar/{cliente}', 'inactive')->name('clientes.inactive');
            route::get('/cards/{cliente}', 'loadCards')->name('clientes.cards');
            route::any('/{id}/update', 'update')->name('clientes.update');
        });

// ORDENS
Route::prefix('/ordens')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Admin\OrdemController')
        ->group(function(){
            route::get('/create', 'create')->name('ordens.create');
            route::any('/{id}/update', 'update')->name('ordens.update');
        });

// CIDADE BRASIL
Route::prefix('/cidadesBrasil')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Apoio\CidadeBrasilController')
        ->group(function(){
            route::get('/{cidadeBrasil}', 'show')->name('cidadesBrasil.show');
        });

// CIDADE
Route::prefix('/cities')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Apoio\CitiesController')
        ->group(function(){
            route::get('/{cities}', 'show')->name('cities.show');
        });

// OCCUPATION
Route::prefix('/occupation')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Apoio\OccupationController')
        ->group(
            function(){
                route::get('/create', 'create')
                    ->name('occupation.create');
                route::post('/store', 'store')
                    ->name('occupation.store');
            }
        );

// FORNECEDOR
Route::prefix('/fornecedor')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Admin\FornecedorController')
    ->group(function(){
        route::get('/', 'index')->name('fornecedores.index');
        route::get('/create', 'create')->name('fornecedores.create');
        route::post('/', 'store')->name('fornecedores.store');        
    }); 


// COMENTARIOS
Route::prefix('comentarios')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Admin\ComentarioController')
    ->group(function(){
        route::post('/', 'store')->name('comentarios.store');
    });