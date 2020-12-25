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


/*
(------------------->>> Route Untuk User <<<-----------------------)
*/

Route::get('/', 'DashboardController@index')->name('home');
Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::get('/register', 'Auth\LoginController@register')->name('register');

Route::get('listbea', 'ListBeaController@index')->name('listbea');
Route::get('detailbea', 'ListBeaController@detailbea')->name('detailbea');
Route::get('lanjutisi', 'ListBeaController@lanjutisi')->name('lanjutisi');

Route::get('berita', 'BeritaController@index')->name('berita');
Route::get('detailberita', 'BeritaController@detailberita')->name('detailberita');



