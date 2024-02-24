@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Types:</h1>
    <ol>
        @foreach ($types as $type)
            <li class="m_b">
                <span class="bold">{{ $type -> typology }} :</span> <br>
                <ul>
                    @foreach ($type -> projects as $project)
                        <li>
                            {{ $project -> titolo }}
                        </li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ol>
@endsection
