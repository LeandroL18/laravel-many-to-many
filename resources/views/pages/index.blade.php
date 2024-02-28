@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <a href="{{ route('create') }}">CREA PROGETTO</a>

    <h1>PROGETTI:</h1>
    <ol>
        @foreach ($projects as $project)
        <li class="m_b">

            <a href="{{ route('show', $project -> id) }}" class="bold">{{$project -> titolo}} :</a> 

            {{ $project -> type -> typology}} <br>

            Tecnologie: 
            <span>
                @foreach ($project -> technologies as $technology)
                    {{ $technology -> name }},
                @endforeach
            </span>

            <a href="{{ route('edit', $project -> id) }}">Modifica</a>

        </li>
        @endforeach
    </ol>

    <a href="{{ route('type.index') }}">VISUALIZZA LE TIPOLOGIE</a>
@endsection
