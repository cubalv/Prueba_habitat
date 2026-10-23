
@extends('layouts.main')

@section('content-main')

<div class="container mt-4">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Generar gestión</h1>

        <a href="{{ route('encabezado_solicitudes.index') }}"
           class="btn btn-secondary">
            Regresar
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            Información de la gestión
        </div>

        <div class="card-body">

            <form action="{{ route('gestion_solicitudes.store') }}"
                  method="POST">
                @csrf

                {{-- Solicitud --}}
                <div class="mb-3">
                    <label for="id_encabezado_solicitud"
                           class="form-label">
                        Solicitud
                    </label>

                    <select name="id_encabezado_solicitud"
                            id="id_encabezado_solicitud"
                            class="form-select" required>
                        <option value="">
                            Selecciona una solicitud
                        </option>

                        @foreach ($solicitudes as $solicitud)
                            <option value="{{ $solicitud->id }}"
                                @selected(old('id_encabezado_solicitud') == $solicitud->id)>
                                Solicitud #{{ $solicitud->id }}
                                -
                                {{ $solicitud->cliente->nombre_cliente
                                    ?? 'Cliente no disponible' }}
                                {{ $solicitud->cliente->apellido_cliente
                                    ?? '' }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Tipo de gestión --}}
                <div class="mb-3">
                    <label for="id_tipo_gestion"
                           class="form-label">
                        Tipo de gestión
                    </label>

                    <select name="id_tipo_gestion"
                            id="id_tipo_gestion"
                            class="form-select" required>
                        <option value="">
                            Selecciona un tipo de gestión
                        </option>

                        @foreach ($tiposGestiones as $tipo)
                            <option value="{{ $tipo->id }}"
                                @selected(old('id_tipo_gestion') == $tipo->id)>
                                {{ $tipo->tipo_gestion }}
                                - {{ $tipo->descripcion_gestion }}
                            </option>
                        @endforeach
                    </select>
                </div>

                {{-- Fecha --}}
                <div class="mb-3">
                    <label for="fecha_gestion"
                           class="form-label">
                        Fecha de gestión
                    </label>

                    <input type="date"
                           name="fecha_gestion"
                           id="fecha_gestion"
                           class="form-control"
                           value="{{ old('fecha_gestion', date('Y-m-d')) }}"
                           required>
                </div>

                {{-- Observaciones --}}
                <div class="mb-3">
                    <label for="observaciones"
                           class="form-label">
                        Observaciones
                    </label>

                    <textarea name="observaciones"
                              id="observaciones"
                              class="form-control"
                              rows="4"
                              required>{{ old('observaciones') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Generar gestión
                </button>

                <a href="{{ route('encabezado_solicitudes.index') }}"
                   class="btn btn-outline-secondary">
                    Cancelar
                </a>

            </form>

        </div>
    </div>
</div>

@endsection
