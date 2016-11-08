<?php

Route::get('/', function() {
    return redirect('/decks');
});

Route::get('/decks', 'DecksController@index');
Route::post('/decks', function(){});
Route::get('/decks/{deck}', 'DecksController@show');
