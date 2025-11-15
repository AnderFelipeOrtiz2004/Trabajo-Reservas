@extends('layout')

@section('contenido')
<div class="mb-4">
    <h1>Detalles del Espacio</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $espacio->nombre }}</h5>
                
                <dl class="row">
                    <dt class="col-sm-3">ID:</dt>
                    <dd class="col-sm-9">{{ $espacio->id }}</dd>
                    
                    <dt class="col-sm-3">Nombre:</dt>
                    <dd class="col-sm-9">{{ $espacio->nombre }}</dd>
                    
                    <dt class="col-sm-3">Tipo:</dt>
                    <dd class="col-sm-9">{{ $espacio->tipo }}</dd>
                    
                    <dt class="col-sm-3">Capacidad:</dt>
                    <dd class="col-sm-9">{{ $espacio->capacidad }} personas</dd>
                    
                    <dt class="col-sm-3">Ubicación:</dt>
                    <dd class="col-sm-9">{{ $espacio->ubicacion }}</dd>
                    
                    <dt class="col-sm-3">Creado:</dt>
                    <dd class="col-sm-9">{{ $espacio->created_at->format('d/m/Y H:i') }}</dd>
                    
                    <dt class="col-sm-3">Actualizado:</dt>
                    <dd class="col-sm-9">{{ $espacio->updated_at->format('d/m/Y H:i') }}</dd>
                </dl>
            </div>
        </div>

        <div class="mt-3">
            <a href="{{ route('espacios.edit', $espacio->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('espacios.destroy', $espacio->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
            </form>
            <a href="{{ route('espacios.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
</div>
@endsection
