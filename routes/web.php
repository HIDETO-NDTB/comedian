<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group.
|
*/


//FrontEnd Controller
Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/categoryranking', 'FrontEndController@categoryranking')->name('categoryranking');

Route::get('/categorynewpost', 'FrontEndController@categorynewpost')->name('categorynewpost');
Route::post('/categorystorepost', 'FrontEndController@categorystorepost')->name('newpost_store');

Route::get('/categoryaboutsite', 'FrontEndController@categoryaboutsite')->name('categoryaboutsite');

// Route::get('/user-login', 'FrontEndController@user_login')->name('userlogin');
// Route::post('/new-user-login', 'FrontEndController@new_user_login')->name('newuserlogin');

// Route::get('/user-register', 'FrontEndController@user_register')->name('user.register');
// Route::post('/new-user-register', 'FrontEndController@new_user_register')->name('register.store');

// ヒデト追加　いいね機能
Route::group(['middleware'=>'auth'],function(){
    Route::group(['prefix'=>'posts/{id}'],function(){
        Route::post('favorite','FavoriteController@store')->name('favorites.favorite');
        Route::delete('unfavorite','FavoriteController@destroy')->name('favorites.unfavorite');
    });
});




Route::resource('/post','PostController');

Auth::routes();


