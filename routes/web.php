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



Auth::routes();

Route::get('/ajax/posts', 'HomeController@indexAjax')->middleware('checkAjax')->name('posts.ajaxShow');



Route::get('/categories', 'CategoryController@printCategories')->name('categories.printPost');


Route::get('/show/{slug}', 'HomeController@show')->name('posts.show');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


// Route::get('/admin', 'Admin\HomeController@index')->name('admin.home')->middleware('auth');
// Route::get('/admin/posts', 'Admin\PostController@index')->name('admin.post.index');

//Questi due li metto nel GRUPPO qua sotto, molto piu comodo.

//questo e il gruppo ADMIN
Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/category_list', 'CategoryCrudController');

    Route::resource('/posts', 'PostController');
});





