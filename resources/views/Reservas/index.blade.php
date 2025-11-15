@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Reservas</h1>
    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear Reserva</a>
</div>

@if ($reservas->count())
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Espacio</th>
                    <th>Solicitante</th>
                    <th>Fecha</th>
                    <th>Hora Inicio</th>
                    <th>Hora Fin</th>
                    <th>Motivo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($reservas as $reserva)
                    <tr>
                        <td>{{ $reserva->id }}</td>
                        <td>
                            <strong>{{ $reserva->espacio->nombre }}</strong><br>
                            <small class="text-muted">{{ $reserva->espacio->ubicacion }}</small>
                        </td>
                        <td>{{ $reserva->solicitante }}</td>
                        <td>{{ \Carbon\Carbon::parse($reserva->fecha)->format('d/m/Y') }}</td>
                        <td>{{ $reserva->hora_inicio }}</td>
                        <td>{{ $reserva->hora_fin }}</td>
                        <td>{{ $reserva->motivo ?? '-' }}</td>
                        <td>
                            <a href="{{ route('reservas.show', $reserva->id) }}" class="btn btn-sm btn-info">Ver</a>
                            <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="d-flex justify-content-center mt-4">
        {{ $reservas->links('pagination::bootstrap-5') }}
    </div>
@else
    <div class="alert alert-info">
        No hay reservas registradas.</a>
    </div>
@endif
@endsection