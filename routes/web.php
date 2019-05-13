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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route page Home
Route::get('/', 'HomeController@index');

// route page les article
Route::get('/article', 'ArticleController@index');

// route page les article
Route::get('/article2', 'ArticleController@indexPage2');

// route afficher un article
Route::get('/article/{post_name}','ArticleController@show');

// route page contact formulaire
Route::get('/contact', 'ContactController@index');

/*routes envoyer un message  */
Route::post('/contact', 'ContactController@store');

/*routes affichage des trois derniers messages envoyés */
Route::get('/contact', 'ContactController@AfficheListeContact');

/*routes déconnecter un user */
Route::get('/deconnexion', 'UserController@deconnecter');

/*routes Authenitification  */
Auth::routes();

/*routes panneau controle get quand c un administrateur */
Route::get('/controle',[
    'uses' => 'AdminController@controle',
    'as' => 'ViewControle',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);

/*routes panneau controle post quand c un utilisateur */
Route::post('/gererUser',[
    'uses' => 'AdminController@gererUser',
    'as' => 'ViewControle',
    'middleware' => 'roles',
    'roles' => ['Admin']
]);





