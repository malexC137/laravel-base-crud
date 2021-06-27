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

//Rotta che salverà i dati ricevuti creando un nuovo utente
Route::post("/comics", "ComicController@store")->name("comics.store");

//Rotta che mostra il form per creare un nuovo Comic
Route::get("/comics/create", "ComicController@create")->name("comics.create");

//Rotta che ci mostra tutti gli elementi disponibili
Route::get("/comics/{comic}", "ComicController@show")->name("comics.show");

//Rotta che ci permette di fare a meno di tutte le altre
// Route::resource("/comics", "ComicController");

//Rotta che salva i dati nel database di un elemento già esistente
Route::match(["PUT", "PATCH"], "/comics/{comic}", "ComicController@update")->name("comics.update");

//Rotta che elimina dal database l'utente con l'id specificato
Route::delete("/comics/{comic}", "ComicController@destroy")->name("comics.destroy");

//Mostra il form per modificare un elemento
Route::get("/comics/{comic}/edit", "ComicController@edit")->name("comics.edit");