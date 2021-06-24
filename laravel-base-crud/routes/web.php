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


//Comics

//Rotta che ci mostra tutti gli elementi disponibili
Route::get("/comics", "ComicController@index")->name("comics.index");

//Rotta che ci mostra tutti gli elementi disponibili
Route::get("/comics/{comic}", "ComicController@show")->name("comics.show");

//Rotta che salverà i dati ricevuti creando un nuovo utente
Route::post("/comics", "ComicController@store")->name("comics.store");

//Rotta che mostra il form per creare un nuovo Comic
Route::get("/comics/create", "ComicController@create")->name("comics.create");
