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



/*admin*/
route::get('/admin/', 'AdminController@index')->name('admin.home');

/* categories */
route::get('/admin/categories/', 'CategoryController@index')->name('category.index');
route::get('/admin/categories/create', 'CategoryController@create')->name('category.create');
route::post('/admin/categories/', 'CategoryController@store')->name('category.store');