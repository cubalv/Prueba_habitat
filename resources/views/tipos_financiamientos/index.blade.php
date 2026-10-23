@extends('layouts.main')

@section('content-main' )

    <div class=" container">
        <div class="row ">
            <div class="col">
                <h1>Productos</h1>
                <p>Bienvenido a la página de productos.</p>
                <a class=" btn btn-primary" href="{{ route('tipos_financiamientos.create') }}">Crear Producto</a>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Valor</th>
                            <th>PLazo</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tipos_financiamientos as $tipo_financiamiento)
                            <tr>
                                <td>{{ $tipo_financiamiento->nombre_tipo_financiamiento }}</td>
                                <td>{{ $tipo_financiamiento->valor_maximo_financiamiento }}</td>
                                <td>{{ $tipo_financiamiento->plazo_meses }}</td>
                                <td>{{ $tipo_financiamiento->estado_tipo_financiamiento }}</td>
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