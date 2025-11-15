<?php

namespace App\Http\Controllers;

use App\Models\Espacios;
use Illuminate\Http\Request;

class EspaciosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $espacios = Espacios::paginate(10);
        return view('Espacios.index', compact('espacios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Espacios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'ubicacion' => 'required|string|max:255',
        ]);
        
        Espacios::create($data);
        
        return redirect()->route('espacios.index')->with('success', 'Espacio creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $espacio = Espacios::findOrFail($id);
        return view('Espacios.show', compact('espacio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $espacio = Espacios::findOrFail($id);
        return view('Espacios.edit', compact('espacio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $espacio = Espacios::findOrFail($id);
        
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'capacidad' => 'required|integer|min:1',
            'ubicacion' => 'required|string|max:255',
        ]);
        
        $espacio->update($data);
        
        return redirect()->route('espacios.index')->with('success', 'Espacio actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $espacio = Espacios::findOrFail($id);
        $espacio->delete();
        
        return redirect()->route('espacios.index')->with('success', 'Espacio eliminado exitosamente.');
    }
}
