<?php
Route::get('/', 'HomeController@index')->name('home');
// автороизация
Route::get('/signup', 'AuthController@getSignup')->middleware('guest')-> name('auth.signup');
Route::post('/signup', 'AuthController@postSignup')->middleware('guest');

Route::get('/signin', 'AuthController@getSignin')->middleware('guest')->name('auth.signin');
Route::post('/signin', 'AuthController@postSignin')->middleware('guest');


Route::get('/signout', 'AuthController@getSignout')->name('auth.signout');


//поиск
Route::get('/search', 'SearchController@getResults')->name('search.results');


// профиль
Route::get('/user/{username}', 'ProfileController@getProfile')->name('profile.index');

Route::get('/profile/edit', 'ProfileController@getEdit')->middleware('auth')->name('profile.edit');
Route::post('/profile/edit', 'ProfileController@postEdit')->middleware('auth')->name('profile.edit');


// друзья
Route::get('/friends', 'FriendController@getindex')->middleware('auth')->name('friend.index');
