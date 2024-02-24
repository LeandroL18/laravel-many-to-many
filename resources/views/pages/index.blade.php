@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Project:</h1>
    <ol>
        @foreach ($projects as $project)
        <li>
            {{$project -> titolo}}
        </li>
        @endforeach
    </ol>
@endsection
