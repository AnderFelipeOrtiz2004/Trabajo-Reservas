@extends('layout')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Espacios</h1>
    <a href="{{ route('espacios.create') }}" class="btn btn-primary">Crear Espacio</a>
</div>

@if ($espacios->count())
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Capacidad</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($espacios as $espacio)
                    <tr>
                        <td>{{ $espacio->id }}</td>
                        <td>{{ $espacio->nombre }}</td>
                        <td>{{ $espacio->tipo }}</td>
                        <td>{{ $espacio->capacidad }}</td>
                        <td>{{ $espacio->ubicacion }}</td>
                        <td>
                            <a href="{{ route('espacios.edit', $espacio->id) }}" class="btn btn-sm btn-warning">Editar</a>
                            <form action="{{ route('espacios.destroy', $espacio->id) }}" method="POST" style="display:inline;">
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
        {{ $espacios->links('pagination::bootstrap-5') }}
    </div>
@else
    <div class="alert alert-info">
        No hay espacios registrados.</a>
    </div>
@endif
@endsection