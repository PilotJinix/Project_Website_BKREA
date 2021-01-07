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
Route::get('akun', 'UsersController@my_account')->name('selftakun');

Route::get('/login', 'Auth\LoginController@index')->name('login');
Route::post('/auten', 'Auth\LoginController@auten')->name('auten');
Route::get('/bye', 'Auth\LoginController@logout')->name('logout');

Route::get('/register', 'Auth\RegisterController@index')->name('register');
Route::post('/create', 'Auth\RegisterController@register')->name('create');

Route::get('listbea', 'ListBeaController@index')->name('listbea');
Route::get('detailbea/{id}', 'ListBeaController@detailbea')->name('detailbea');
Route::get('lanjutisi/{id}', 'ListBeaController@lanjutisi')->name('lanjutisi');
Route::post('lanjutisi/ajuan/{id}', 'ListBeaController@createfrom')->name('create-ajuan');

Route::get('berita', 'BeritaController@index')->name('berita');
Route::get('detailberita/{id}', 'BeritaController@detailberita')->name('detailberita');

Route::get('riwayat', 'PengajuanController@index')->name('riwayat');
Route::get('riwayat/{id}', 'PengajuanController@detail')->name('detailriwayat');
Route::post('riwayat/review/{id}', 'PengajuanController@review')->name('review');


/*( Route Untuk Admin )*/

Route::get('/logadmin', 'Admin\Auth\DashboardAController@login')->name('logadmin');
Route::get('homeadmin', 'Admin\Auth\DashboardAController@index')->name('homeadmin');
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

Route::get('Aajuan', 'Admin\ListAjuanController@index')->name('Aajuan');
Route::get('Aajuan/update/{id}', 'Admin\ListAjuanController@detail')->name('Update-Aajuan');
Route::get('Aajuan/update/acc/{id}', 'Admin\ListAjuanController@accept')->name('acc-Aajuan');
Route::get('Aajuan/update/reject/{id}', 'Admin\ListAjuanController@reject')->name('reject-Aajuan');
Route::get('Aajuan/delete/{id}', 'Admin\ListAjuanController@hapus')->name('hapuspengajuan');
Route::get('Aajuan/update/download/{id}', 'Admin\ListAjuanController@download')->name('download');









