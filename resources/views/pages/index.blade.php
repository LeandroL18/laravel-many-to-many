@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Project:</h1>
    <ol>
        @foreach ($projects as $project)
        <li class="m_b">
            <span class="bold">{{$project -> titolo}} :</span> 
            {{ $project -> type -> typology}}
        </li>
        @endforeach
    </ol>

    <a href="{{ route('type.index') }}">VISUALIZZA LE TIPOLOGIE</a>
@endsection
