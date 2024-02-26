@extends('layouts.main-layout')
@section('head')
    <title>Create</title>
@endsection
@section('content')
   <h1>NUOVO PROGETTO</h1>
    <form action="{{ route('store') }}" method='POST'>
    
        @csrf
        @method('POST')

        <label for="nome_autore">Nome Autore</label>
        <input type="text" name="nome_autore" id="nome_autore"><br><br>

        <label for="titolo">Titolo</label>
        <input type="text" name="titolo" id="titolo"><br><br>

        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione"><br><br>

        <label for="type_id">Type</label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
                <option value="{{ $type -> id }}">{{ $type -> typology }}</option>
            @endforeach
        </select><br><br>

        <label>Scegli le tecnologie:</label><br>
        @foreach ($technologies as $technology)
        <input type="checkbox" name="technology_id[]" id="{{ 'technology_id_' . $technology -> id }}" value="{{ $technology -> id }}">
        <label for="{{ 'technology_id_' . $technology -> id}}">{{ $technology -> name }}</label>
        <br>
        @endforeach

        <input type="submit" value="CREA">

    </form>
    
@endsection
