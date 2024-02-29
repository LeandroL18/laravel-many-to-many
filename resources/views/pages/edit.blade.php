@extends('layouts.main-layout')
@section('head')
    <title>Edit</title>
@endsection
@section('content')
    <h1>MODIFICA PROGETTO</h1>
    <form action="{{ route('update', $project -> id) }}" method='POST' enctype="multipart/form-data">
    
        @csrf
        @method('PUT')

        <label for="nome_autore">Nome Autore</label>
        <input type="text" name="nome_autore" id="nome_autore" value="{{ $project -> nome_autore }}"><br><br>

        <label for="titolo">Titolo</label>
        <input type="text" name="titolo" id="titolo" value="{{ $project -> titolo }}"><br><br>

        <label for="descrizione">Descrizione</label>
        <input type="text" name="descrizione" id="descrizione" value="{{ $project -> descrizione }}"><br><br>

        <label for="type_id">Type</label>
        <select name="type_id" id="type_id">
            @foreach ($types as $type)
                <option value="{{ $type -> id }}" 
                    @if ($project -> type -> id == $type -> id)
                        selected
                    @endif
                    >{{ $type -> typology }}
                </option>
            @endforeach
        </select><br><br>

        <label for="immagine">Immagine</label>
        <input type="file" name="immagine" id="immagine" accept="immagine/*"><br><br>

        <label>Scegli le tecnologie:</label><br>
        @foreach ($technologies as $technology)
            <input 
                type="checkbox" 
                name="technology_id[]" 
                id="{{ 'technology_id_' . $technology -> id }}" 
                value="{{ $technology -> id }}"
                @foreach ($project -> technologies as $project_technology)
                    @if ($project_technology -> id == $technology -> id)
                        checked
                    @endif
                @endforeach
            >
            <label for="{{ 'technology_id_' . $technology -> id}}">
                {{ $technology -> name }}
            </label>
            <br>
        @endforeach

        <input type="submit" value="AGGIORNA">

    </form>
@endsection
