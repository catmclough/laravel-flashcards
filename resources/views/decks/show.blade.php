@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/deck-show.css">
@endsection

@section('nav')
    <a href="/decks">
        <div class="back-arrow">
            &#x21d0;
        </div>
    </a>
@endsection

@section('content')
    <h1>{{ $deck->title }}</h1>

    {{-- @if($cards->count() > 0)
        <div class="nav-button">
            <a href="/cards/{{ $deck->cards()->first()->id }}" alt="study deck">Study This Deck</a>
        </div>
    @endif

    <button class="nav-button toggle-button" alt="create new card">Add Card</button>

    <form method="POST" action="/cards">
        <div class="form togglable hidden">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="deck_id" value="{{ $deck->id }}">
            <textarea name="prompt" placeholder="Prompt..." required></textarea>
            <textarea id="answer-field" name="answer" placeholder="Answer..." required></textarea>
            <button class="nav-button" type="submit">Create Card</button>
        </div>
    </form>
 --}}
    <div id=card-list>
        @foreach ($deck->cards as $card)
            <a href="/cards/{{ $card->id }}/edit">
                <div class="card">{{ $card->prompt }} - {{ $card->answer }}</div>
            </a>
        @endforeach
    </div>
@endsection

@section('footer')
    {{-- <script type="text/javascript" src="/js/toggle.js"></script>
    <script type="text/javascript">
        var originalText = "";
        $(".card").mouseover(function() {
            originalText = $(this).text();
            $(this).html("Edit");
        }).mouseout(function() {
            $(this).html(originalText);
        });
    </script> --}}
@endsection
