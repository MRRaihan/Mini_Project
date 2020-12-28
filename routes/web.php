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
Route::get('/', 'FrontendController@index')->name('home.index');



Route::group(['prefix'=>'admin'],function (){
    Route::get('dashboard','DashboardController@dashboard')->name('admin.dashboard');
    Route::resource('role', 'RoleController');
    Route::resource('user', 'UserController');
    Route::resource('service', 'ServiceController');
});
