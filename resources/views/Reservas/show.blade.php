@extends('layout')

@section('contenido')
<div class="mb-4">
    <h1>Detalles de la Reserva</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Reserva #{{ $reserva->id }}</h5>
                
                <dl class="row">
                    <dt class="col-sm-4">ID:</dt>
                    <dd class="col-sm-8">{{ $reserva->id }}</dd>
                    
                    <dt class="col-sm-4">Espacio:</dt>
                    <dd class="col-sm-8">
                        <strong>{{ $reserva->espacio->nombre }}</strong><br>
                        <small class="text-muted">{{ $reserva->espacio->ubicacion }}</small>
                    </dd>
                    
                    <dt class="col-sm-4">Solicitante:</dt>
                    <dd class="col-sm-8">{{ $reserva->solicitante }}</dd>
                    
                    <dt class="col-sm-4">Fecha:</dt>
                    <dd class="col-sm-8">{{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y') }}</dd>
                    
                    <dt class="col-sm-4">Hora Inicio:</dt>
                    <dd class="col-sm-8">{{ $reserva->hora_inicio }}</dd>
                    
                    <dt class="col-sm-4">Hora Fin:</dt>
                    <dd class="col-sm-8">{{ $reserva->hora_fin }}</dd>
                    
                    <dt class="col-sm-4">Motivo:</dt>
                    <dd class="col-sm-8">{{ $reserva->motivo ?? '-' }}</dd>
                    
                    <dt class="col-sm-4">Creado:</dt>
                    <dd class="col-sm-8">{{ $reserva->created_at->format('d/m/Y H:i') }}</dd>
                    
                    <dt class="col-sm-4">Actualizado:</dt>
                    <dd class="col-sm-8">{{ $reserva->updated_at->format('d/m/Y H:i') }}</dd>
                </dl>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>
            <a href="{{ route('reservas.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
