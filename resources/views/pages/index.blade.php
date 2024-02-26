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

            <span class="bold">{{$project -> titolo}} :</span> 

            {{ $project -> type -> typology}} <br>

            Technologies: 
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
