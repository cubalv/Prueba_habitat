<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos_gestion;
use App\Models\Encabezado_solicitud;

class Gestiones extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $tiposGestiones = Tipos_gestion::where(
            'estado_gestion',
            1
        )->orderBy('tipo_gestion')->get();

        $solicitudes = Encabezado_solicitud::with('cliente')->get();

        return view('gestion_solicitudes.create', compact(
            'tiposGestiones',
            'solicitudes'
        ));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datos = $request->validate([
        'id_encabezado_solicitud' => [
            'required',
            'exists:encabezado_solicitud,id',
        ],
        'id_tipo_gestion' => [
            'required',
            'exists:tipos_gestiones,id',
        ],
        'fecha_gestion' => 'required|date',
        'observaciones' => 'required|string|max:1000',
    ]);


    return redirect()
        ->route('encabezado_solicitudes.index')
        ->with('success', 'Gestión registrada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
