<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('salut', function () {
    return 'Salut les gens';
});

Route::get('salut/{slug}-{id}',['as' => 'salut', function ($slug, $id) {
    return 'Lien: ' . route('salut', ['slug' => $slug, 'id' => $id]);
}])->where('slug', '[a-z0-9\-]+')->where('id','[0-9]+');

Route::get('a-propos',['as' => 'about', 'uses' => 'PageController@about'] );

Route::resource('welcome', 'WelcomeController', ['only' => ['index']]);
Route::resource('article', 'PostsController');
Route::resource('categorie', 'CategoriesController');
Route::resource('tag', 'TagsController');

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){
    Route::get('/', function () {
        return 'welcome';
    });
});

Route::resource('link','LinksController', ['only' => ['create', 'store']]);
Route::get('r/{link}', ['as' => 'link.show', 'uses' => 'LinksController@show'])->where('link', '[0-9]+');
//Route::group(['prefix' => 'links'], function(){
//    Route::get('/create', ['as' => 'createLinks', 'uses' => 'LinksController@create']);
//});

Route::get('/home', ['as' => 'home', 'uses' => 'HomeController@index']);

