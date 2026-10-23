
@extends('layouts.main')

@section('content-main')

<div class="container">
    <h1>Generar solicitud</h1>

    

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action=" {{ route('encabezado_solicitudes.store') }}"
          method="POST">
        @csrf

        <div class="mb-3">
            <label for="id_cliente" class="form-label">
                Cliente
            </label>

            <select name="id_cliente" id="id_cliente"
                    class="form-select" required>
                <option value="">Selecciona un cliente</option>

                @foreach ($clientes as $cliente)
                    <option value="{{ $cliente->id }}"
                        @selected(old('id_cliente') == $cliente->id)>
                        {{ $cliente->nombre_cliente }}
                        {{ $cliente->apellido_cliente }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="producto" class="form-label">
                Producto
            </label>

            <select name="producto" id="producto"
                    class="form-select" required>
                <option value="">Selecciona un producto</option>

                @foreach ($productos as $producto)
                    <option
                        value="{{ $producto->nombre_tipo_financiamiento }}"
                        @selected(old('producto') == $producto->nombre_tipo_financiamiento)>
                        {{ $producto->nombre_tipo_financiamiento }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="monto_solicitud" class="form-label">
                Monto solicitado
            </label>
            <input type="number" name="monto_solicitud"
                   id="monto_solicitud" class="form-control"
                   step="0.01" min="0.01"
                   value="{{ old('monto_solicitud') }}" required>
        </div>

        <div class="mb-3">
            <label for="tasa_interes" class="form-label">
                Tasa de interés (%)
            </label>
            <input type="number" name="tasa_interes"
                   id="tasa_interes" class="form-control"
                   step="0.01" min="0" max="100"
                   value="{{ old('tasa_interes', 0) }}" required>
        </div>

        <div class="mb-3">
            <label for="tasa_moratoria" class="form-label">
                Tasa moratoria (%)
            </label>
            <input type="number" name="tasa_moratoria"
                   id="tasa_moratoria" class="form-control"
                   step="0.01" min="0" max="100"
                   value="{{ old('tasa_moratoria', 0) }}" required>
        </div>

        <div class="mb-3">
            <label for="plazo_meses" class="form-label">
                Plazo en meses
            </label>
            <input type="number" name="plazo_meses"
                   id="plazo_meses" class="form-control"
                   min="1" step="1"
                   value="{{ old('plazo_meses') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">
            Generar solicitud
        </button>
    </form>
</div>

@endsection
