@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Aggiungi Nuovo Film</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $errore)
                    <li>{{ $errore }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genere</label>
            <select name="genre_id" id="genre_id" class="form-select">
                <option value="">-- Seleziona Genere --</option>
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-success">Salva</button>
        <a href="{{ route('films.index') }}" class="btn btn-secondary">Torna</a>
    </form>
</div>
@endsection
