@php 
    $p = $espacio ?? null;
@endphp

<div class="col-md-6">
    <label for="nombre" class="form-label">Nombre <span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{ old('nombre', $p ? $p->nombre : '') }}" required>
    @error('nombre')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="tipo" class="form-label">Tipo <span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('tipo') is-invalid @enderror" id="tipo" name="tipo" value="{{ old('tipo', $p ? $p->tipo : '') }}" required>
    @error('tipo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="capacidad" class="form-label">Capacidad <span class="text-danger">*</span></label>
    <input type="number" class="form-control @error('capacidad') is-invalid @enderror" id="capacidad" name="capacidad" min="1" value="{{ old('capacidad', $p ? $p->capacidad : '') }}" required>
    @error('capacidad')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
<div class="col-md-6">
    <label for="ubicacion" class="form-label">Ubicación <span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('ubicacion') is-invalid @enderror" id="ubicacion" name="ubicacion" value="{{ old('ubicacion', $p ? $p->ubicacion : '') }}" required>
    @error('ubicacion')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
