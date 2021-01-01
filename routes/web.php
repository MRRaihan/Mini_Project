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
Route::post('comment/{service}','CommentController@store')->name('comment.store');
Route::post('/comment_reply/{comment}', 'CommentReplyController@store')->name('reply.store')->middleware('auth');


Route::get('admin/login', 'DashboardController@login')->name('admin.login');

Route::group(['prefix'=>'admin'],function (){
    Route::get('dashboard','DashboardController@dashboard')->middleware('can:admin_provider')->name('admin.dashboard');
    Route::resource('role', 'RoleController')->middleware('can:admin_provider');
    Route::resource('user', 'UserController')->middleware('can:admin_provider');
    Route::resource('service', 'ServiceController')->middleware('can:admin_provider');

    Route::get('comments','Admin\CommentController@index')->name('comment.index');
    Route::delete('comments/{id}','Admin\CommentController@destroy')->name('comment.destroy');

    Route::get('commentreply','Admin\CommentReplyController@index')->name('commentreply.index');
    Route::delete('commentreply/{id}','Admin\CommentReplyController@destroy')->name('commentreply.destroy');

});

Auth::routes([
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);

/*Route::get('/home', 'HomeController@index')->name('home');*/
