@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>{{ $project -> titolo }}</h1><br>

    <h5>Nome autore: {{ $project -> nome_autore }}</h5>
    
    <h5>Tipologia: {{ $project -> type -> typology }}</h5><br>

    <h5>Tecnologie:</h5> 
    <span>
        @foreach ($project -> technologies as $technology)
            {{ $technology -> name }},
        @endforeach
    </span><br><br>

    <a href="{{ route('edit', $project -> id) }}">MODIFICA</a><br><br>

    <a href="{{ route('index') }}">TORNA ALLA HOME</a>
@endsection
