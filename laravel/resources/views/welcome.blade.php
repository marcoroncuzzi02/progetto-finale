@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Benvenuto su {{ config('app.name') }}</h1>
        <p class="lead text-muted">La tua piattaforma per gestire e visualizzare dati in modo semplice e veloce.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Accedi</a>
        <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Registrati</a>
    </div>

@endsection
