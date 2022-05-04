@extends('guest.template.base')

@section('title', 'DB-Movies')

@section('content')
    <main>
        <ul>
            @foreach ($movies as $movie)
            <li>{{ $movie->title }}</li>
            @endforeach
        </ul>
    </main>
@endsection