@extends('layout.base')

@section('content')
@foreach ($movies as $movie)
    <div>
        <h1>Titolo: {{ $movie -> title }}</h1>
        <h3>Titolo originale: {{ $movie -> original_title}}</h3>
        <h4>Nazione: {{ $movie -> nationality}}</h4>
        <h4>Data di uscita: {{ $movie -> date}}</h4>
        <h5>Voto: {{ $movie -> vote }}</h5>
    </div>
@endforeach
@endsection
