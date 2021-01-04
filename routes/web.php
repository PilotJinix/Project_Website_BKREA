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




Route::get('/', 'UsersController@index')->name('home');
Route::get('/dashboard', 'UsersController@passuser')->name('dashboard');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/auten', 'Auth\LoginController@auten')->name('auten');
Route::get('/bye', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/create', 'Auth\RegisterController@register')->name('create');

Route::get('listbea', 'ListBeaController@index')->name('listbea');
Route::get('detailbea', 'ListBeaController@detailbea')->name('detailbea');
Route::get('lanjutisi', 'ListBeaController@lanjutisi')->name('lanjutisi');

Route::get('berita', 'BeritaController@index')->name('berita');
Route::get('detailberita', 'BeritaController@detailberita')->name('detailberita');


/*( Route Untuk Admin )*/

//Route::get('/admin', 'DashboardAController@index')->name('homeadmin');
Route::get('tesadmin', 'Admin\DashboardAController@index')->name('homeadmin');

Route::get('tesadminlistbea', 'Admin\ListBeaController@index')->name('tesadminlistbea');
Route::get('tesadminlistbea/akun/delete/{id}', 'Admin\ListBeaController@hapusakun')->name('deleteakun');

Route::get('Aberita', 'Admin\ListBeritaController@index')->name('Aberita');
Route::get('Aberita/new', 'Admin\ListBeritaController@news')->name('new-berita');
Route::post('Aberita/new/save', 'Admin\ListBeritaController@berita')->name('save-berita');
Route::get('Aberita/new/delete/{id}', 'Admin\ListBeritaController@delete')->name('hapus-berita');









