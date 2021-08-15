<?php

Route::get('/', 'TournamentsController@index')->name('tournaments.index');

Route::post('/subscribe/newsletter', 'NewsletterController@store')->name('newsletter');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'tournaments'], function(){
    Route::post('/store', 'TournamentsController@store')->name('tournaments.store');
});



