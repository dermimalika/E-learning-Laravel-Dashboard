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
Route::get('/home', 'EnsController@dash')->name('home');

/**Les routes de l'enseignant */
/**ajouter enseignant */
Route::get('/iEnsForm', 'EnsController@iEnsForm');
Route::post('enstore','EnsController@store');
/**modfier enseignant */
Route::get('home/{id}/edit','EnsController@editEns');
Route::put('home/{id}','EnsController@update');
/**supprimer enseignant */
Route::delete('home/{id}','EnsController@destroy')->name('ens.destroy');
