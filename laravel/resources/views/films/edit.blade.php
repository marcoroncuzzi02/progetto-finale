@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Modifica Film</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $errore)
                    <li>{{ $errore }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('films.update', $film) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $film->title }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea name="description" id="description" class="form-control">{{ $film->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="genre_id" class="form-label">Genere</label>
            <select name="genre_id" id="genre_id" class="form-select">
                @foreach($genres as $genre)
                    <option value="{{ $genre->id }}" {{ $film->genre_id == $genre->id ? 'selected' : '' }}>
                        {{ $genre->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <h5>Seleziona i Tag:</h5>
            @foreach ($tags as $tag)
                <div class="form-check">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="tags[]"
                        value="{{ $tag->id }}"
                        id="tag-{{ $tag->id }}"
                        {{ $film->tags->contains($tag->id) ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="tag-{{ $tag->id }}">
                        {{ $tag->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button class="btn btn-primary">Aggiorna</button>
        <a href="{{ route('films.index') }}" class="btn btn-secondary">Torna</a>
    </form>
</div>
@endsection
