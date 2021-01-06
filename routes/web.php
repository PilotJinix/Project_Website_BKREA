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
Route::get('detailbea/{id}', 'ListBeaController@detailbea')->name('detailbea');
Route::get('lanjutisi', 'ListBeaController@lanjutisi')->name('lanjutisi');

Route::get('berita', 'BeritaController@index')->name('berita');
Route::get('detailberita/{id}', 'BeritaController@detailberita')->name('detailberita');


/*( Route Untuk Admin )*/

//Route::get('/admin', 'DashboardAController@index')->name('homeadmin');
Route::get('homeadmin', 'Admin\DashboardAController@index')->name('homeadmin');
Route::get('homeadmin/akun/delete/{id}', 'Admin\DashboardAController@hapus')->name('deleteakun');

Route::get('Abeasiswa', 'Admin\ListBeaController@index')->name('Abeasiswa');
Route::get('Abeasiswa/bea', 'Admin\ListBeaController@news')->name('new-beasiswa');
Route::post('Abeasiswa/bea/save', 'Admin\ListBeaController@beasiswa')->name('save-beasiswa');
Route::post('Abeasiswa/save-edit/{id}', 'Admin\ListBeaController@saveEdit')->name('saveEditbea');
Route::get('Abeasiswa/new/edit/{id}', 'Admin\ListBeaController@edit')->name('edit-beasiswa');
Route::get('Abeasiswa/akun/delete/{id}', 'Admin\ListBeaController@hapus')->name('deletebeasiwa');

Route::get('Aberita', 'Admin\ListBeritaController@index')->name('Aberita');
Route::get('Aberita/new', 'Admin\ListBeritaController@news')->name('new-berita');
Route::post('Aberita/new/save', 'Admin\ListBeritaController@berita')->name('save-berita');
Route::post('Aberita/save-edit/{id}', 'Admin\ListBeritaController@saveEdit')->name('saveEdit');
Route::get('Aberita/new/edit/{id}', 'Admin\ListBeritaController@edit')->name('edit-berita');
Route::get('Aberita/new/delete/{id}', 'Admin\ListBeritaController@delete')->name('hapus-berita');









