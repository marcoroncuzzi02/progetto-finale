@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="mb-4">Benvenuto, {{ Auth::user()->name }} 👋</h2>

    <div class="row g-4"> {{-- g-4 aggiunge spazio tra le colonne --}}
        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <h5 class="card-title">Profilo</h5>
                    <p class="card-text">Visualizza e modifica le tue informazioni personali.</p>
                    <a href="{{ url('profile') }}" class="btn btn-primary mt-auto">Vai al profilo</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card shadow-sm border-0 rounded-3 h-100">
                <div class="card-body text-center d-flex flex-column justify-content-between">
                    <h5 class="card-title">Gestione Dati</h5>
                    <p class="card-text">Crea, modifica ed elimina i tuoi elementi dal backoffice.</p>
                    <a href="#" class="btn btn-success mt-auto">Gestisci</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
