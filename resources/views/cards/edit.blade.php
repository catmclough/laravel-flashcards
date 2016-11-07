@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/card-edit.css">
@stop

@section('content')
    <form id="update-card-form" method="POST" action="/cards/{{ $card->id }}">
        {{ method_field('PATCH') }}
        <input type="hidden" name="_token" value="{{ csrf_token() }}">

        <input class="card card-edit-input" type="text" name="prompt" value="{{ $card->prompt }}">
        <input class="card card-edit-input" type="text" name="answer" value="{{ $card->answer }}">
        <input class="nav-button" type="submit" value="Update Card"/>
    </form>
@stop
