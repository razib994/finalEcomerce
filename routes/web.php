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

// Route::get('/', function () {
//     return view('');
// });
Route::get('/', [
	'uses' => 'PagesController@index',
	'as'   => '/'
]);
Route::get('/products', [
	'uses' => 'PagesController@products',
	'as'   => 'products'
]);


Route::group(['prefix' => 'admin'], function ()
{
    Route::get('/', [
    	'uses' => 'AdminPagesController@index', 
        'as' => 'admin'
    ]);
    Route::get('/product/create', [
    	'uses' => 'AdminPagesController@create', 
        'as' => 'product/create'
    ]);
    Route::get('/product/manage', [
        'uses' => 'AdminPagesController@productShow', 
        'as' => 'product/manage'
    ]);
    Route::get('/product/update', [
        'uses' => 'AdminPagesController@productUpdate', 
        'as' => 'product/update'
    ]);


    Route::get('/category/create', [
        'uses' => 'AdminPagesController@categoryCreate', 
        'as' => 'category/create'
    ]);
    Route::get('/category/manage', [
        'uses' => 'AdminPagesController@categoryShow', 
        'as' => 'category/manage'
    ]);
    Route::get('/category/update', [
        'uses' => 'AdminPagesController@categoryUpdate', 
        'as' => 'category/update'
    ]);


    Route::get('/brand/create', [
        'uses' => 'AdminPagesController@brandCreate', 
        'as' => 'brand/create'
    ]);
    Route::get('/brand/manage', [
        'uses' => 'AdminPagesController@brandShow', 
        'as' => 'brand/manage'
    ]);
    Route::get('/brand/update', [
        'uses' => 'AdminPagesController@brandUpdate', 
        'as' => 'brand/update'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
