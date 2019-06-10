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

Route::get('Articles','ArticleController@getArticles');
Route::get('Commandes','CommandeController@getCommandes');
Route::get('ajoutArticle','ArticleController@ajoutArticle');
Route::post('saisieArticle','ArticleController@postAjoutArticle');
Route::post('AjoutReussi','DetailController@newDetail');
Route::get('Article/{id}','ArticleController@addToCart');
Route::get('NewCommande','CommandeController@NewCommande');
Route::get('Commandes','CommandeController@getCommandes');
Route::get('Commandes/{id}','CommandeController@getCommandeDetails');
Route::get('MesCommandes/{id}','CommandeController@getCommandeClient');
