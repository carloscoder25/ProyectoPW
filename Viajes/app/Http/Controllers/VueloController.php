<?php

namespace App\Http\Controllers;

use App\Models\vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function buscar(Request $request)
    {
        $vuelos = Vuelo::query();

        if ($request->filled('origen')) {
            $vuelos->where('origen', $request->origen);
        }

        if ($request->filled('destino')) {
            $vuelos->where('destino', $request->destino);
        }

        if ($request->filled('fecha_salida')) {
            $vuelos->whereDate('fecha_salida', $request->fecha_salida);
        }

        if ($request->filled('precio_min') && $request->filled('precio_max')) {
            $vuelos->whereBetween('precio', [$request->precio_min, $request->precio_max]);
        }

        // Filtrar por otros criterios
        if ($request->filled('aerolinea')) {
            $vuelos->where('aerolinea', $request->aerolinea);
        }

        return response()->json($vuelos->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(vuelo $vuelo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(vuelo $vuelo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, vuelo $vuelo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vuelo $vuelo)
    {
        //
    }
}
