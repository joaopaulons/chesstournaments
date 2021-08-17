<?php

Route::get('/', 'TournamentsController@index');

Route::post('/subscribe/newsletter', 'NewsletterController@store')->name('newsletter');

Auth::routes();

Route::resource('tournament', 'TournamentsController');




