@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $film->title }}</h1>
    <p><strong>Genere:</strong> {{ $film->genre->name ? : 'Nessun Genere' }}</p>
    <p><strong>Tag:</strong></p>
    <ul>
        @forelse ($film->tags as $tag)
            <li>{{ $tag->name }}</li>
        @empty
            <li>Nessun tag assegnato.</li>
        @endforelse
    </ul>
    <p><strong>Descrizione:</strong> {{ $film->description ? : 'Nessuna descrizione' }}</p>

    <a href="{{ route('films.index') }}" class="btn btn-secondary">Torna alla lista</a>
</div>
@endsection
