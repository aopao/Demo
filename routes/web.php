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

define('ADMIN_PREFIX', 'admin');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/qr/{cid}', 'WxGroupController@index')->name('group.index');
Route::get(ADMIN_PREFIX.'/add/del/{id}', 'AdminController@destroy')->name('admin.add.del');
Route::resource(ADMIN_PREFIX.'/add', 'AdminController', ['as' => 'admin']);
Route::get(ADMIN_PREFIX.'/wx/{id}', 'AdminWxGroupController@index')->name('admin_wx_group.index');
Route::get(ADMIN_PREFIX.'/wx/del/{id}', 'AdminWxGroupController@destroy')->name('admin_wx_group.del');
Route::match(['get', 'post'], ADMIN_PREFIX.'/wx/{id}/create', 'AdminWxGroupController@create')->name('admin_wx_group.create');
