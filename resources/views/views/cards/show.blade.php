@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/card-show.css">
@stop

@section('nav')
    <div id="card-show-buttons">
        <a class="nav-button" href="/decks/{{ $card->deck_id }}" alt="back to deck">
            Back to Deck
        </a>
        <a class="nav-button" href="/cards/{{ $card->deck->cards()->inRandomOrder()->first()->id }}" alt="next card">
            Next Card
        </a>
    </div>
@stop

@section('content')
    <div class=card-container>
        <div class="toggle-button card">
            <div class="togglable" id=prompt>
                {{ $card->prompt }}
            </div>

            <div class="togglable hidden" id=answer>
                {{ $card->answer }}
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script type="text/javascript" src="/js/toggle.js"></script>
@stop
