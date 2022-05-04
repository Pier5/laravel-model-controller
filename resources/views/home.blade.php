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
                    @if ($movie->nationality === 'american') 
                        <h3>US</h3>
                    @elseif($movie->nationality === 'american/british') 
                        <h3>US/UK</h3>
                    @endif
                    
                    <h6>Anno d'uscita nelle sale:</h6>
                    <h4>{{ date_format(date_create($movie->date), 'Y') }}</h4>

                    <h6>Voto:</h6>
                    <div class="stars">
                        @for ($i = 0; $i < ceil($movie->vote / 2); $i++) 
                            <i class="fullstar fa-solid fa-star"></i>
                         @endfor
                        @for ($j = 0; $j < floor(($maxVote - $movie->vote) / 2); $j++)
                            <i class="emptystar fa-solid fa-star"></i>   
                        @endfor                    
                    </div>
                        
                </div>
            </div>
        @endforeach
    </main>
@endsection