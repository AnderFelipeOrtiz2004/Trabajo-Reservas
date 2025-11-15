@extends('layout')

@section('contenido')
<div class="mb-4">
    <h1>Crear Nueva Reserva</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <form method="POST" action="{{ route('reservas.store') }}" class="row g-3">
            @csrf 
            @include('Reservas.partials.form')
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar Reserva</button>
                <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection