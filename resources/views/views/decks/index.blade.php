@extends('layout')

@section('head')
    <link rel="stylesheet" href="/css/decks-index.css">
@endsection

@section('content')
    <h1>Dumb Flashcards</h1>
    <ul id=deck-list>
        @foreach ($decks as $deck)
            <a href="/decks/{{ $deck->id }}" alt="{{ $deck->title }}">
                <li>{{ $deck->title }}</li>
            </a>
        @endforeach
    </ul>

    <button class="nav-button toggle-button" alt="create new deck">Add Deck</button>

    <form method="POST" action="/decks">
        <div class="form togglable hidden">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <textarea name="title" placeholder="Deck Title" required></textarea>
            <button class="nav-button" type="submit">Create Deck</button>
        </div>
    </form>

    @if (count($errors))
        <div class="form-errors">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
@endsection

@section('footer')
    <script type="text/javascript" src="/js/toggle.js"></script>
@endsection
