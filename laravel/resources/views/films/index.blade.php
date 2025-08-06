@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1>Lista Film</h1>
        <a href="{{ route('films.create') }}" class="btn btn-primary">Aggiungi Film</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Titolo</th>
                <th>Genere</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach($films as $film)
                <tr>
                    <td>{{ $film->id }}</td>
                    <td>{{ $film->title }}</td>
                    <td>{{ $film->genre->name ?? 'N/A' }}</td>
                    <td>
                        <a href="{{ route('films.show', $film) }}" class="btn btn-info btn-sm">Mostra</a>
                        <a href="{{ route('films.edit', $film) }}" class="btn btn-warning btn-sm">Modifica</a>
                        <form action="{{ route('films.destroy', $film) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di voler eliminare questo film?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
