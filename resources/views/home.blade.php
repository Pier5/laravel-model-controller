@extends('guest.template.base')

@section('title', 'DB-Movies')

@section('content')
    <main>
        @foreach ($movies as $movie)
            <div class="cards">
                <div class="card">
                    <h6>Titolo:</h6>
                    <h1>{{ $movie->title }}</h1>
                    <h6>Titolo originalee:</h6>
                    <h2>{{ $movie->original_title }}</h2>
                    <h6>Nazionalità:</h6>
                    <h3>{{ $movie->nationality }}</li>
                    <h6>Anno d'uscita nelle sale:</h6>
                    <h4>{{ $movie->date }}</h4>
                    <h6>Voto:</h6>
                    <h4>{{ $movie->vote }}</h4>
                </div>
            </div>
        @endforeach
    </main>
@endsection