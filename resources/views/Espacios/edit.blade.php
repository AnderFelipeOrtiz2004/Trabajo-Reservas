@extends('layout')

@section('contenido')
<div class="mb-4">
    <h1>Editar Espacio</h1>
</div>

<div class="row">
    <div class="col-md-8">
        <form method="POST" action="{{ route('espacios.update', $espacio->id) }}" class="row g-3">
            @csrf
            @method('PUT')
            @include('Espacios.partials.form', ['espacio' => $espacio])
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Actualizar Espacio</button>
                <a href="{{ route('espacios.index') }}" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>
    </div>
</div>
@endsection