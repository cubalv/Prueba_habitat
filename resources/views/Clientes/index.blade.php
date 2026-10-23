@extends('layouts.main')

@section('content-main' )

    <div class=" container">
        <div class="row ">
            <div class="col">
                <h1>Clientes</h1>
                <p>Bienvenido a la página de clientes.</p>
                <a class=" btn btn-primary" href="{{ route('clientes.create') }}">Crear Cliente</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Documento Identificacion</th>
                            <th>Genero</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{ $cliente->nombre_cliente }}</td>
                                <td>{{ $cliente->apellido_cliente }}</td>
                                <td>{{ $cliente->documento_identificacion }}</td><td>
                                    {{ $cliente->genero == 0 ? 'Masculino' : ($cliente->genero == 1 ? 'Femenino' : 'Otros') }}
                                </td>
                                <td>{{ $cliente->estado_cliente }}</td>
                                <td>
                                    <a class="btn btn-primary" href="">Editar</a>
                                    <form action="" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
            </div>
        </div>
    </div>
    
    
@endsection