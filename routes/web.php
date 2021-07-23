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
//     return view('welcome');
// });

Route::get('/', 'DonasiController@landing');

Route::get('login', function () {
    return view('user.login');
})->name('login');
Route::post('postlogin', 'LoginController@login')->name('postlogin');
Route::get('logout', 'LoginController@logout')->name('logout');


Route::group(['middleware' => ['auth', 'ceklevel:bendahara,admin']], function () {
    //Data Donasi
    // Route::resource('donasis','DonasiController');
    Route::get('/donasi', 'DonasiController@index')->name('donasi');
    Route::get('/create/donasi', 'DonasiController@create')->name('donasicreate');
    Route::post('/donasi/store', 'DonasiController@store')->name('donasisave');
    Route::get('/donasi/edit/{id}', 'DonasiController@edit')->name('donasiedit');
    Route::post('/donasi/update/{id}', 'DonasiController@update')->name('donasiupdate');
    Route::get('/donasi/hapus/{id}', 'DonasiController@destroy')->name('donasihapus');

    Route::get('/donasis/{id}/cetak','DonasiController@cetak')->name('donasi.cetak');
}); 

Route::group(['middleware' => ['auth', 'ceklevel:admin']], function () {
    // Data User
    
    Route::prefix('/users')->group(function() {
        Route::get('/user', 'UserController@index')->name('user');
        Route::get('/create_user', 'UserController@create')->name('create_user');
        Route::post('/simpan_user', 'UserController@store')->name('simpan_user');
        Route::get('/edit_user/{id}', 'UserController@edit')->name('edit_user');
        Route::post('/update_user/{id}', 'UserController@update')->name('update_user');
        Route::get('/delete_user/{id}', 'UserController@destroy')->name('delete_user');
        Route::get('/{user}',function ($user)
        {
            $url = 'User';
            $admin = User::where('Level',$user)->get();
            return view('user.admin',compact('admin'));
        })->name('admin');
        
 });
});