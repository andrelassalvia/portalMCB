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
            route::get('/create/{validated?}', 'create')->name('clientes.create');
            route::post('/{id?}', 'store')->name('clientes.store');
            route::get('/{cliente}', 'show')->name('clientes.show');
            route::get('/{cliente}/edit', 'edit')->name('clientes.edit');
            route::get('/delete/{cliente}', 'destroy')->name('clientes.destroy');
            route::any('/{id}/update', 'update')->name('clientes.update');
        });

// CLIENTS LIST 
Route::prefix('/clientsList')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Admin\ClienteListsController')
        ->group(function(){
            route::get('/potential', 'potentialClients')->name('clients.potential');
            route::get('/withOrders', 'withOrdersClients')->name('clients.withOrders');
            route::get('/inactives', 'inactivesClients')->name('clients.inactives');
        });

// CLIENTS TOGGLE ACTIVE
Route::prefix('/clientsToggle')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Admin\ClienteToggleActive')
        ->group(function(){
            route::any('/inativar/{cliente}', 'inactive')->name('clientes.inactive');
            route::any('/ativar/{cliente}', 'active')->name('clientes.active');
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
            route::get('/load_cities/{country}', 'loadCities')->name('cities.loadCities');
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
Route::prefix('/fornecedores')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Admin\FornecedorController')
    ->group(function(){
        route::get('/', 'index')->name('fornecedores.index');
        route::get('/create', 'create')->name('fornecedores.create');
        route::post('/', 'store')->name('fornecedores.store');
        route::get('/{fornecedor}', 'show')->name('fornecedores.show');        
    }); 


// COMENTARIOS
Route::prefix('comentarios')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Admin\ComentarioController')
    ->group(function(){
        route::post('/', 'store')->name('comentarios.store');
        route::get('/cards/{cliente}', 'show')->name('comentarios.show');
    });

// ALERTS
Route::prefix('alerts')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Apoio\AlertsController')
    ->group(function(){
        route::get('/errors-message', 'errorMessage')->name('alerts.errors');
        route::get('/success-message', 'successMessage')->name('alerts.success');
    });

// TELEPHONE - NEW CLIENT
Route::prefix('telephones')
    ->middleware(['auth'])
    ->controller('App\Http\Controllers\Admin\TelephoneController')
    ->group(function(){
        route::get('/create', 'create')->name('telephones.create');
        route::post('/', 'store')->name('telephones.store');
    });
