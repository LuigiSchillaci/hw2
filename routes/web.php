<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\UserController;

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


Route::get("login", "App\Http\Controllers\LoginController@verifica");
Route::post("login", "App\Http\Controllers\LoginController@login");

Route::get("registrazione", "App\Http\Controllers\RegistrazioneController@visualizza");
Route::post("registrazione", "App\Http\Controllers\RegistrazioneController@register");

Route::get("profilo", "App\Http\Controllers\ProfiloController@register");
Route::get("profilo/stampa", "App\Http\Controllers\ProfiloController@stampa");

Route::get("principale", "App\Http\Controllers\PrincipaleController@vedi");
Route::get("principale/cerca/{text}", "App\Http\Controllers\PrincipaleController@cerca")->name('cerca');
Route::post("principale/aggiungi", "App\Http\Controllers\PrincipaleController@aggiungi")->name('aggiungi');
Route::get("principale/rimuovi/{telefono}", "App\Http\Controllers\PrincipaleController@rimuovi")->name('rimuovi');


Route::get("logout", "App\Http\Controllers\LoginController@logout");

Route::get("elimina", "App\Http\Controllers\EliminaController@elimina")->name('elimina');




Route::get("controllo_password", "App\Http\Controllers\ControllopasswordController@entra");
Route::post("controllo_password", "App\Http\Controllers\ControllopasswordController@controllo");



Route::get("cambio", "App\Http\Controllers\CambioController@vedi");
Route::post("cambio", "App\Http\Controllers\CambioController@cambia");




