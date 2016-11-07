<?php

Route::get('/', function() {
    return redirect('/decks');
});

Route::get('/decks', 'DecksController@index');

Route::get('/decks/{deck}', 'DecksController@show');
