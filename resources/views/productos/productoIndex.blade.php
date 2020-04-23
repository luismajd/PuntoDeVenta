@extends('layouts.tema')

@section('content')

<!-- Topbar Search -->
<form action="{{ route('producto.show', '1') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar producto por id..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
</form>

<br><br>

<div class="container-fluid">

    <a href="{{ route('producto.create') }}" class="btn btn-success">Nuevo Producto</a>
    <hr>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Departamento</th>
            <th>Existencia</th>
            <th>Stock mínimo</th>
            <th>Stock máximo</th>
            <th>Imagen</th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ '$'.$producto->precio }}</td>
                <td>{{ $producto->departamento }}</td>
                <td>{{ $producto->existencia }}</td>
                <td>{{ $producto->stockmin }}</td>
                <td>{{ $producto->stockmax }}</td>
                <td><img src='{{ 'img/' . $producto->imagen }}' height="100" width="100"></td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
