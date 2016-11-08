<?php

Route::get('/', function() {
    return redirect('/decks');
});

Route::get('/decks', 'DecksController@index');
Route::post('/decks', 'DecksController@store');
Route::get('/decks/{deck}', 'DecksController@show');
