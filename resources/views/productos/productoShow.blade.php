@extends('layouts.tema')

@section('content')
<div class="container-fluid">

    <table class="table">
        <tr>
            <th>ID</th><td>{{ $producto->id }}</td>
        </tr>
        <tr>
            <th>Descripción</th><td>{{ $producto->descripcion }}</td>
        </tr>
        <tr>
            <th>Precio</th><td>{{ '$'.$producto->precio }}</td>
        </tr>
        <tr>
            <th>Departamento</th><td>{{ $producto->departamento }}</td>
        </tr>
        <tr>
            <th>Existencia</th><td>{{ $producto->existencia }}</td>
        </tr>
        <tr>
            <th>Stock mínimo</th><td>{{ $producto->stockmin }}</td>
        </tr>
        <tr>
            <th>Stock máximo</th><td>{{ $producto->stockmax }}</td>
        </tr>
        <tr>
            <th>Imagen</th><td><img src='{{ 'img/' . $producto->imagen }}' height="100" width="100"></td></td>
        </tr>
    </table>

</div>
@endsection
