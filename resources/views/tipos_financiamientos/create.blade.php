@extends('layouts.main')

@section('content-main')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Crear Productos</h1>
                <form action="{{ route('tipos_financiamientos.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre_tipo_financiamiento" class="form-label capitalize">Nombre Tipo Financiamiento</label>
                        <input type="text" class="form-control" id="nombre_tipo_financiamiento" name="nombre_tipo_financiamiento" required>
                    </div>
                    <div class="form-group">
                        <label for="descripcion_tipo_financiamiento" class="form-label capitalize">Descripcion Tipo Financiameinto </label>
                        <input type="text" class="form-control" id="descripcion_tipo_financiamiento" name="descripcion_tipo_financiamiento" required>
                    </div>
                    <div class="form-group">
                        <label for="valor_maximo_financiamiento" class="form-label capitalize">valor maximo financiamiento </label>
                        <input type="text" class="form-control" id="valor_maximo_financiamiento" name="valor_maximo_financiamiento" required>
                    </div>
                    <div class="form-group">
                        <label for="plazo_meses" class="form-label capitalize">Plazo (meses)</label>
                        <input type="number" class="form-control" id="plazo_meses" name="plazo_meses" max="96" required>
                    </div>
                    <div class="form-group">
                        <label for="estado_tipo_financiamiento" class="form-label capitalize">estado tipo financiamiento</label>
                        <select class="form-control" id="estado_tipo_financiamiento" name="estado_tipo_financiamiento" required>
                            <option value="">Seleccione...</option>
                            <option value="0">Inactivo</option>
                            <option value="1">Activo</option>
                        </select>
                    </div>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Producto</button>
                </form>
            </div>
        </div>
    </div>

@endsection