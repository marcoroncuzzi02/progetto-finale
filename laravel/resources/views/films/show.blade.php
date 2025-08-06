@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $film->title }}</h1>
    <p><strong>Genere:</strong> {{ $film->genre->name ? : 'Nessun Genere' }}</p>
    <p><strong>Descrizione:</strong> {{ $film->description ? : 'Nessuna descrizione' }}</p>

    <a href="{{ route('films.index') }}" class="btn btn-secondary">Torna alla lista</a>
</div>
@endsection
