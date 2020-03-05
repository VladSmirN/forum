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
Route::redirect('/', '/catalog');
 
Auth::routes();

Route::prefix('profile')->group(function () {
    Route::get('', 'ProfileController@show')->name('profile');
    Route::get('/{id}', 'ProfileController@showAlien')->name('profile.showAlien');
    Route::get('edit', 'ProfileController@edit')->name('profile.edit');
    Route::post('store', 'ProfileController@store')->name('profile.store');
});

Route::get('catalog', 'ThreadController@catalog')->name('thread.catalog');

Route::prefix('thread')->group(function () {
    Route::get('create', 'ThreadController@create')->name('thread.create');
    Route::get('/{id}', 'ThreadController@show')->name('thread.show');
    Route::post('store', 'ThreadController@store')->name('thread.store');
});

Route::prefix('message/{thread_id}')->group(function () {
    Route::get('create', 'MessageController@create')->name('message.create');
    Route::post('store', 'MessageController@store')->name('message.store');
});