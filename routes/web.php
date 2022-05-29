<?php

use Illuminate\Support\Facades\Route;



use Illuminate\Support\Facades\Auth;

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



Route::group(['namespace' => 'App\Http\Controllers'], function () {

    Route::get('/', 'AuthController@user_login')->name('login');
    Route::post('/', 'AuthController@postLogin');
    Route::get('/register', 'AuthController@registration');
    Route::post('/register', 'AuthController@postRegistration');
});

Route::group(['namespace' => 'App\Http\Controllers','middleware' => 'auth'], function () {

    Route::get('/logout', 'AuthController@logout');
    Route::get('/my_friends{id}', 'FriendController@myFriends')->name('friends.show');
    Route::get('/home', 'AuthController@home');
    Route::get('/add_friend{id}', 'FriendController@friend')->name('user.add');
    Route::get('/remove_friend{id}', 'FriendController@removeFriend')->name('user.remove');
    Route::get('/edit_user{user}', 'FriendController@editUser')->name('user.edit');
    Route::post('/update_user{user}', 'FriendController@updateUser')->name('user.update');
});

