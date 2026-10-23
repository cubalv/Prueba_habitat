<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Tipo_financiamiento;
use App\Models\Encabezado_solicitud;

class Encabezado_solicitudes extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $solicitudes = Encabezado_solicitud::with('cliente')
        ->orderByDesc('created_at')
        ->get();

    return view(
        'encabezado_solicitudes.index',
        compact('solicitudes')
    );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $clientes = Cliente::where('estado_cliente', 1)
            ->orderBy('nombre_cliente')
            ->get();

        $productos = Tipo_financiamiento::where(
            'estado_tipo_financiamiento', 1
        )->orderBy('nombre_tipo_financiamiento')->get();

        return view(
            'encabezado_solicitudes.create',
            compact('clientes', 'productos')
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            'id_cliente' => 'required|exists:clientes,id',
            'producto' => 'required|string|max:255',
            'monto_solicitud' => 'required|numeric|min:0.01',
            'tasa_interes' => 'required|numeric|min:0|max:100',
            'tasa_moratoria' => 'required|numeric|min:0|max:100',
            'plazo_meses' => 'required|integer|min:1|max:96',
        ]);

        $datos['estado_solicitud'] = 1;

        Encabezado_solicitud::create($datos);

        return redirect()
            ->route('encabezado_solicitudes.index')
            ->with('success', 'Solicitud creada exitosamente.');
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
        $solicitud = Encabezado_solicitud::findOrFail($id);
        $solicitud->update(['estado_solicitud' => 0]);
        return redirect()
            ->route('encabezado_solicitudes.index')
            ->with('success', 'Solicitud desistida exitosamente.');
    }
}
