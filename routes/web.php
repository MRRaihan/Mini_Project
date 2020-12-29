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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('client/login', 'HomeController@clientlogin')->name('client.login');
Route::get('client/registration', 'HomeController@clientreg')->name('client.registration');


Route::get('/', 'FrontendController@index')->name('home.index');
Route::get('service/{id}/details','FrontendController@details')->name('service.details');




Route::get('admin/login', 'DashboardController@login')->name('admin.login');

Route::group(['prefix'=>'admin', 'middleware'=>'auth'],function (){
    Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('role', 'RoleController');
    Route::resource('user', 'UserController');
    Route::resource('service', 'ServiceController');
});

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/
