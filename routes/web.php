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
            route::post('{cliente}', 'update')->name('clientes.update');
            route::delete('/{cliente}', 'destroy')->name('clientes.destroy');
            route::get('/load_cidades/{estado}', 'loadCidades');
            route::get('/load_cities/{country}', 'loadCities');
            route::any('/inativar/{cliente}', 'inactive')->name('clientes.inactive');
            route::get('/cards/{cliente}', 'loadCards')->name('clientes.cards');
        });

// ORDENS
Route::prefix('/ordens')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Admin\OrdemController')
        ->group(function(){
            route::get('/create', 'create')->name('ordens.create');
        });

// CIDADE BRASIL
Route::prefix('/cidadesBrasil')
        ->middleware(['auth'])
        ->controller('App\Http\Controllers\Apoio\CidadeBrasilController')
        ->group(function(){
            route::get('/{cidadeBrasil}', 'show')->name('cidadesBrasil.show');
        });