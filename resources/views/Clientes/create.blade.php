@extends('layouts.main')

@section('content-main')

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Crear Cliente</h1>
                <form action="{{ route('clientes.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre_cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido_cliente" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_documento">Tipo de documento</label>
                        <select class="form-control" id="tipo_documento" name="tipo_documento" required>
                            <option value="">Seleccione...</option>
                            <option value="1">Cédula</option>
                            <option value="2">DPI</option>
                            <option value="3">Pasaporte</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="documento_identificacion">Documento de Identificación</label>
                        <input type="text" class="form-control" id="documento_identificacion" name="documento_identificacion" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                        <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
                    </div>

                    <div class="form-group">
                        <label for="nit">NIT</label>
                        <input type="text" class="form-control" id="nit" name="nit" required>
                    </div>
                    <div class="form-group">
                        <label for="etnia">Etnia</label>
                        <input type="text" class="form-control" id="etnia" name="etnia" required>
                    </div>

                    <div class="form-group">
                        <label for="genero">Género</label>
                        <select class="form-control" id="genero" name="genero" required>
                            <option value="">Seleccione...</option>
                            <option value="0">Masculino</option>
                            <option value="1">Femenino</option>
                            <option value="2">Otro</option>
                        </select>
                    </div>
                    <div class="form-group invisible ">
                        <label for="estado_cliente">Estado</label>
                        <select class="form-control" id="estado_cliente" name="estado_cliente" required>
                            <option value="1">activo</option>
                        </select>
                    </div>
            
                    <button type="submit" class="btn btn-primary">Crear Cliente</button>
                </form>
            </div>
        </div>
    </div>

@endsection