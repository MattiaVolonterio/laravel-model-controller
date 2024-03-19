@extends('template.app')

@section('page_title', 'Movie')

@section('main')
    <div class="container mt-3">
        <h2 class="h1 fw-bold">Titolo: {{ $movie->title }}</h2>
        <p class="pt-3">Titolo Originale: {{ $movie->original_title }}</p>
        <p>Nazionalità: {{ $movie->nationality }}</p>
        <p>Nazionalità: {{ $movie->nationality }}</p>
        <p>Data di uscita: {{ $movie->date }}</p>
        <p>Voto: {{ $movie->vote }}</p>
    </div>
@endsection
