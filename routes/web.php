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

Route::get('/', 'GuestController@index');

Auth::routes();

Route::get('/home', 'GuestController@index')->name('home');

Route::get('/categories', 'CategoryController@index_guest')->name('category.index.guest');
Route::get('/category/{id}', 'CategoryController@show_guest')->name('category.show.guest');

Route::get('/sub_categories', 'CategoryController@index_guest')->name('sub_category.index.guest');
Route::get('/sub_category/{id}', 'SubCategoryController@show_guest')->name('sub_category.show.guest');




/*admin*/
route::get('/admin/', 'AdminController@index')->name('admin.home');

/* categories */
route::get('/admin/categories/', 'CategoryController@index')->name('category.index');
route::get('/admin/categories/create', 'CategoryController@create')->name('category.create');
route::post('/admin/categories/', 'CategoryController@store')->name('category.store');

/* subcategory */
route::post('/admin/sub-categories/', 'SubCategoryController@store')->name('subcategory.store');


/* Book */
route::get('/admin/book/create', 'BookController@create')->name('book.create');
route::post('/admin/book/', 'BookController@store')->name('book.store');