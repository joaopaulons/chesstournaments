<?php

Route::get('/', function(){
    return view('home.index');
});

Route::post('/subscribe/newsletter', 'NewsletterController@store')->name('newsletter');

Auth::routes();

Route::resource('tournament', 'TournamentsController');




