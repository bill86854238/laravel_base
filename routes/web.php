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

Route::get('/', 'HomeController@index');
Route::post('/postData', 'HomeController@postData');
Route::get('/getUserJson', 'HomeController@getUserJson');
Route::get('/getUserJson/{id}', 'HomeController@getUserJsonById');
Route::get('/getUserJsonV2', 'HomeController@getUserJsonByIdV2');
Route::get('/getUserJsonByIdAjax', 'HomeController@getUserJsonByIdAjax')->name('getUserJsonByIdAjax');

Route::get('/bootstrapTable', 'HomeController@bootstrapTable');
Route::get('/dataTable', 'HomeController@dataTable');
Route::get('/dataTableJson', 'HomeController@dataTableJson')->name('dataTableJson');
Route::get('/bootstrapTableJson', 'HomeController@bootstrapTableJson')->name('bootstrapTableJson');







