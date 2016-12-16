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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);
    
Route::resource('article', 'PostsController');
Route::resource('categorie', 'CategoriesController');
Route::resource('tag', 'TagsController');

Route::get('a-propos',['as' => 'about', 'uses' => 'PageController@about'] );
Auth::routes();
Route::group(['prefix' => 'cockpit', 'middleware' => ['auth']], function(){
    
});






