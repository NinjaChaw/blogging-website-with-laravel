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

//Frontendcontroller
Route::get('/', ['as'=>'index', 'uses'=>'FrontEndController@index']);

Route::get('/post/{slug}', ['as'=>'post.single', 'uses'=>'FrontEndController@singlePost']);

Route::get('/category/{id}', ['as'=>'category.single', 'uses'=>'FrontEndController@category']);

Route::get('/tag/{id}', ['as'=>'tag.single', 'uses'=>'FrontEndController@tag']);



//Search clouser route
Route::get('/results', function() {

    $posts = \App\Post::where('title', 'like', '%'.request('query').'%')->get();

    return view('results')
        ->with('posts', $posts)
        ->with('category', \App\Category::take(5)->get())
        ->with('title', 'Search result: '.request('query'))
        ->with('settings', \App\Setting::first())
        ->with('query', request('query'));
});



//Log in routs
Auth::routes();




//Route groups for admin prefix
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {

    //Login route controllers
    Route::get('/dashboard', ['as'=>'home', 'uses'=>'HomeController@index']);

    //Posts route controllers
    Route::get('/post/create', ['as'=>'post.create', 'uses'=>'PostsController@create']);

    Route::post('/post/store', ['as'=>'post.store', 'uses'=>'PostsController@store']);

    Route::get('/posts', ['as'=>'posts', 'uses'=>'PostsController@index']);

    Route::get('/post/delete/{id}', ['as'=>'post.delete', 'uses'=>'PostsController@destroy']);

    Route::get('/posts/trash', ['as'=>'posts.trash', 'uses'=>'PostsController@trash']);

    Route::get('/posts/kill/{id}', ['as'=>'post.kill', 'uses'=>'PostsController@kill']);

    Route::get('/posts/restore/{id}', ['as'=>'post.restore', 'uses'=>'PostsController@restore']);

    Route::get('/posts/edit/{id}', ['as'=>'post.edit', 'uses'=>'PostsController@edit']);

    Route::post('/post/update/{id}', ['as'=>'post.update', 'uses'=>'PostsController@update']);

    //Categories route controllers
    Route::get('/categories', ['as'=>'categories', 'uses'=>'CategoriesController@index']);

    Route::get('/category/create', ['as'=>'category.create', 'uses'=>'CategoriesController@create']);

    Route::post('/category/store', ['as'=>'category.store', 'uses'=>'CategoriesController@store']);

    Route::get('/category/edit/{id}', ['as'=>'category.edit', 'uses'=>'CategoriesController@edit']);

    Route::post('/category/update/{id}', ['as'=>'category.update', 'uses'=>'CategoriesController@update']);

    Route::get('/category/delete/{id}', ['as'=>'category.delete', 'uses'=>'CategoriesController@destroy']);

    //Tags route controllers
    Route::get('/tags', ['as'=>'tags', 'uses'=>'TagsController@index']);

    Route::get('/tag/create', ['as'=>'tag.create', 'uses'=>'TagsController@create']);

    Route::post('/tag/store', ['as'=>'tag.store', 'uses'=>'TagsController@store']);

    Route::get('/tag/edit/{id}', ['as'=>'tag.edit', 'uses'=>'TagsController@edit']);

    Route::get('/tag/delete/{id}', ['as'=>'tag.delete', 'uses'=>'TagsController@destroy']);

    Route::post('/tag/update/{id}', ['as'=>'tag.update', 'uses'=>'TagsController@update']);

    //Users route controllers
    Route::get('/users', ['as'=>'users', 'uses'=>'UsersController@index']);

    Route::get('/user/create', ['as'=>'user.create', 'uses'=>'UsersController@create']);

    Route::post('/user/store', ['as'=>'user.store', 'uses'=>'UsersController@store']);

    Route::get('/user/admin/{id}', ['as'=>'user.admin', 'uses'=>'UsersController@admin']);

    Route::get('/user/not/admin/{id}', ['as'=>'user.not.admin', 'uses'=>'UsersController@not_admin']);

    Route::get('/user/delete/{id}', ['as'=>'user.delete', 'uses'=>'UsersController@destroy']);

    //User profiles controller
    Route::get('/user/profile', ['as'=>'user.profile', 'uses'=>'ProfilesController@index']);

    Route::post('/user/profile/update', ['as'=>'user.profile.update', 'uses'=>'ProfilesController@update']);

    //settings route controller
    Route::get('/settings', ['as'=>'settings', 'uses'=>'SettingsController@index']);

    Route::post('/setting/update', ['as'=>'setting.update', 'uses'=>'SettingsController@update']);


});