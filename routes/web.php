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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//Route::get('')





/*Admin Routes group*/
Route::prefix('admin')->group(function(){

    Route::get('/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\AdminLoginController@login')->name('admin.login.submit');

    Route::get('/', 'AdminController@index')->name('admin.dashboard');

    Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');
});
/*end of admin routes*/


/*Vendor Routes group*/
Route::prefix('vendor')->group(function(){

    Route::get('/login','Auth\VendorLoginController@showLoginForm')->name('vendor.login');
    Route::post('/login','Auth\VendorLoginController@login')->name('vendor.login.submit');

    Route::get('/register','Auth\VendorLoginController@showRegisterForm')->name('vendor.register');
    Route::post('/register','Auth\VendorLoginController@register')->name('vendor.register.submit');

    Route::get('/', 'VendorController@index')->name('vendor.dashboard');
    Route::get('/logout', 'Auth\VendorLoginController@vendorLogout')->name('vendor.logout');

});
/*end of admin routes*/



/*facebook-Routes*/
Route::get('/facebook_messenger_api','MessangerController@index');
Route::post('/facebook_messenger_api','MessangerController@index');
/*end of facebook-Routes*/

