<?php

namespace App\Http\Controllers;

use App\Models\Reservas;
use App\Models\Espacios;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservas = Reservas::with('espacio')->paginate(10);
        return view('Reservas.index', compact('reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $espacios = Espacios::all();
        return view('Reservas.create', compact('espacios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i',
            'motivo' => 'nullable|string',
        ]);

        Reservas::create($data);

        return redirect()->route('reservas.index')->with('success', 'Reserva creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $reserva = Reservas::with('espacio')->findOrFail($id);
        return view('Reservas.show', compact('reserva'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $reserva = Reservas::findOrFail($id);
        $espacios = Espacios::all();
        return view('Reservas.edit', compact('reserva', 'espacios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reserva = Reservas::findOrFail($id);

        $data = $request->validate([
            'espacio_id' => 'required|exists:espacios,id',
            'solicitante' => 'required|string|max:255',
            'fecha' => 'required|date',
            'hora_inicio' => 'required|date_format:H:i',
            'hora_fin' => 'required|date_format:H:i',
            'motivo' => 'nullable|string',
        ]);

        $reserva->update($data);

        return redirect()->route('reservas.index')->with('success', 'Reserva actualizada exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reserva = Reservas::findOrFail($id);
        $reserva->delete();

        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada exitosamente.');
    }
}
