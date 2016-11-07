<?php

Route::get('/decks', 'DecksController@index');

Route::get('/decks/{deck}', 'DecksController@show');
