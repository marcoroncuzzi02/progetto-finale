@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Benvenuto su {{ config('app.name') }}</h1>
        <p class="lead text-muted">La tua piattaforma per gestire e visualizzare dati in modo semplice e veloce.</p>
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Accedi</a>
        <a href="{{ route('register') }}" class="btn btn-outline-secondary btn-lg">Registrati</a>
    </div>

    <div class="row text-center">
        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">📊 Gestione Dati</h5>
                    <p class="card-text">Organizza i tuoi dati in pochi click con un’interfaccia intuitiva.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">🔒 Sicurezza</h5>
                    <p class="card-text">Accesso protetto e gestione utenti sicura con autenticazione Laravel.</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-body">
                    <h5 class="card-title">⚡ Velocità</h5>
                    <p class="card-text">Dati sempre disponibili grazie alle nostre API veloci ed efficienti.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
