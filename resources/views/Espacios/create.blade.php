@extends('layout')

@section('contenido')
<div class="mb-4">
    <h1>Crear Nuevo Espacio</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <form method="POST" action="{{ route('espacios.store') }}" class="row g-3">
            @csrf 
            @include('Espacios.partials.form')
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Guardar Espacio</button>
                <a href="{{ route('espacios.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection