@php 
    $r = $reserva ?? null;
@endphp

<div class="col-md-12">
    <label for="espacio_id" class="form-label">Espacio <span class="text-danger">*</span></label>
    <select class="form-select @error('espacio_id') is-invalid @enderror" id="espacio_id" name="espacio_id" required>
        <option value="">-- Selecciona un espacio --</option>
        @foreach($espacios as $espacio)
            <option value="{{ $espacio->id }}" {{ old('espacio_id', $r ? $r->espacio_id : '') == $espacio->id ? 'selected' : '' }}>
                {{ $espacio->nombre }} ({{ $espacio->ubicacion }})
            </option>
        @endforeach
    </select>
    @error('espacio_id')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label for="solicitante" class="form-label">Solicitante <span class="text-danger">*</span></label>
    <input type="text" class="form-control @error('solicitante') is-invalid @enderror" id="solicitante" name="solicitante" value="{{ old('solicitante', $r ? $r->solicitante : '') }}" required>
    @error('solicitante')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label for="fecha" class="form-label">Fecha <span class="text-danger">*</span></label>
    <input type="date" class="form-control @error('fecha') is-invalid @enderror" id="fecha" name="fecha" value="{{ old('fecha', $r ? $r->fecha : '') }}" required>
    @error('fecha')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label for="hora_inicio" class="form-label">Hora Inicio <span class="text-danger">*</span></label>
    <input type="time" class="form-control @error('hora_inicio') is-invalid @enderror" id="hora_inicio" name="hora_inicio" value="{{ old('hora_inicio', $r ? $r->hora_inicio : '') }}" required>
    @error('hora_inicio')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-md-6">
    <label for="hora_fin" class="form-label">Hora Fin <span class="text-danger">*</span></label>
    <input type="time" class="form-control @error('hora_fin') is-invalid @enderror" id="hora_fin" name="hora_fin" value="{{ old('hora_fin', $r ? $r->hora_fin : '') }}" required>
    @error('hora_fin')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="col-12">
    <label for="motivo" class="form-label">Motivo</label>
    <textarea class="form-control @error('motivo') is-invalid @enderror" id="motivo" name="motivo" rows="3">{{ old('motivo', $r ? $r->motivo : '') }}</textarea>
    @error('motivo')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>