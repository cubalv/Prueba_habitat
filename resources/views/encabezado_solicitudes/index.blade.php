@extends('layouts.main')

@section('content-main')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Encabezado Solicitudes</h1>
                <p>Bienvenido a la página de encabezado solicitudes.</p>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                <a class=" btn btn-primary" href="{{ route('encabezado_solicitudes.create') }}">Crear nueva solicitud</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Codigo solicutd</th>
                            <th>Nombre solicitante</th>
                            <th>Monto Solicitado</th>
                            <th>Tasa Interes</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($solicitudes as $encabezado_solicitud)
                            <tr>
                                <td>{{ $encabezado_solicitud->id }}</td>
                                <td>{{ $encabezado_solicitud->cliente->nombre_cliente }} {{ $encabezado_solicitud->cliente->apellido_cliente }}</td>
                                <td>{{ $encabezado_solicitud->monto_solicitud }}</td>
                                <td>{{ $encabezado_solicitud->tasa_interes }}</td>
                                <td>{{ $encabezado_solicitud->estado_solicitud == 1 ? 'Aprobada' : 'Dada de baja' }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('gestion_solicitudes.create', $encabezado_solicitud->id) }}">Nueva Gestion</a>
                                    <form action="{{ route('encabezado_solicitudes.destroy', $encabezado_solicitud->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que deseas desistir de esta solicitud?')">Desistir</button>
                                    </form>
                            </tr>
                        @endforeach
                    </tbody>

            </div>
        </div>
    </div>
@endsection