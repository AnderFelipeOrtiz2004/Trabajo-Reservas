@extends('layout')

@section('contenido')
<div class="mb-4">
    <h1>Editar Reserva</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <form method="POST" action="{{ route('reservas.update', $reserva->id) }}" class="row g-3">
            @csrf
            @method('PUT')
            @include('Reservas.partials.form', ['reserva' => $reserva])
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Reserva</button>
                <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection