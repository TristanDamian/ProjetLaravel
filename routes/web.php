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
//Accueil
Route::get('/', function () { return view('welcome'); });

//Commandes côté admin
Route::get('Commandes','CommandeController@getCommandes');
Route::get('Commandes/{id}/Details','CommandeController@getCommandeDetails');
Route::get('Commandes/{id}/Supprimer', 'CommandeController@supprimerCommande');
Route::get('creerCommande','CommandeController@creationCommande');
Route::post('saisieCommande', 'CommandeController@postCreationCommande');
//Côté client
Route::get('MesCommandes/{id}','CommandeController@getCommandeClient');

//Articles
Route::get('Articles','ArticleController@getArticles');
//Ajout d'un article par un admin
Route::get('ajoutArticle','ArticleController@ajoutArticle');
Route::post('saisieArticle','ArticleController@postAjoutArticle');
//Ajout dans le panier du client
Route::get('Article/{id}','ArticleController@addToCart');
Route::post('AjoutReussi','DetailController@newDetail');

//Utilisateurs
Route::get('Connexion', 'UtilisateurController@connexion');
Route::post('connecte', 'UtilisateurController@postConnecterUtilisateur');
Route::get('deconnecte', 'UtilisateurController@deconnexion');
Route::get('inscription','UtilisateurController@ajoutUtilisateur');
Route::post('postAjoutUtilisateur', 'UtilisateurController@postAjoutUtilisateur');

//Clients
Route::get('compteClient', 'ClientController@getCommandesClient');