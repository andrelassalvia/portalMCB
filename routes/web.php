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
            route::get('/last', 'indexLast')->name('clientes.last');
            route::get('/create/{validated?}', 'create')->name('clientes.create');
            route::post('/{id?}', 'store')->name('clientes.store');
            route::get('/{cliente}', 'show')->name('clientes.show');
            route::get('/{cliente}/edit', 'edit')->name('clientes.edit');
            route::delete('/{cliente}', 'destroy')->name('clientes.destroy');
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
            route::get('/', 'index')->name('ordens.index');
            route::get('/create/{id?}', 'create')->name('ordens.create');
            route::get('/{ordem}', 'show')->name('ordens.show');
            route::get('/{ordem}/edit', 'edit')->name('ordens.edit');
            route::any('/{id}/update', 'update')->name('ordens.update');
            route::any('/{id}/updateStatus', 'updateStatus')->name('ordens.updateStatus');
            route::any('/{id}/updateClassif', 'updateClassif')->name('ordens.updateClassif');
        });

// CIDADE BRASIL
Route::prefix('/cidadesBrasil')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Apoio\CidadeBrasilController')
        ->group(function(){
            route::get('/{cidadeBrasil}', 'show')->name('cidadesBrasil.show');
            route::get('/load_cidades/{estado}', 'loadCidades')
                ->name('cidadesBrasil.loadCidades');

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

// ALERTS
Route::prefix('alerts')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Apoio\AlertsController')
    ->group(function(){
        route::get('/error-message', 'errorMessage')->name('alerts.errors');
    });

// TELEPHONE - NEW CLIENT
Route::prefix('telephones')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Admin\TelephoneController')
    ->group(function(){
        route::get('/create', 'create')->name('telephones.create');
        route::post('/', 'store')->name('telephones.store');
    });
