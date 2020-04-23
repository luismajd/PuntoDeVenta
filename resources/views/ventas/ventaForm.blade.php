@extends('layouts.tema')

@section('content')

<!-- Topbar Search -->
<form action="{{ route('venta.show', '1') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
      <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar venta por id..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button type="submit" class="btn btn-primary">
          <i class="fas fa-search fa-sm"></i>
        </button>
      </div>
    </div>
</form>

<br><br>

<div class="container-fluid">

    <h1> Nueva venta: </h1>

    {!! Form::open(['route' => 'venta.store']) !!}

        {!! Form::label('cliente_id', 'ID cliente') !!}
        {!! Form::number('cliente_id', null, ['class' => 'form-control', 'id' => 'cliente_id', 'min' => '1']) !!}

        {!! Form::label('user_id', 'ID usuario') !!}
        {!! Form::text('user_id', Auth::user()->id, ['class' => 'form-control', 'id' => 'user_id', 'readonly']) !!}

        <br><br>

        <h2> Agregar productos: </h2>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Precio $</th>
                <th>Existencia</th>
                <th>Imagen</th>
                <th>Agregar</th>
                <th>Cantidad</th>
            </tr>
            @foreach($productos as $producto)
                <tr>
                    <td>{!! Form::text('producto_id[]', $producto->id, ['class' => 'form-control', 'id' => 'producto_id', 'readonly']) !!} </td>
                    <td>{{ $producto->descripcion }}</td>
                    <td>{!! Form::text('precio[]', $producto->precio, ['class' => 'form-control', 'id' => 'precio', 'readonly']) !!} </td>
                    <td>{{ $producto->existencia }}</td>
                    <td><img src='{{ 'img/' . $producto->imagen }}' height="100" width="100"></td>
                    <td>
                        {!! Form::hidden('agregar[]', '0', false, ['class' => 'form-control', 'id' => 'agregar']) !!}
                        {!! Form::checkbox('agregar[]', '1', false, ['class' => 'form-control', 'id' => 'agregar']) !!}
                    </td>
                    <td>{!! Form::number('cantidad[]', null, ['class' => 'form-control', 'id' => 'cantidad', 'min' => '0']) !!}</td>
                </tr>
            @endforeach
        </table>

        <br>

        <button type="submit" class="btn btn-primary">Registrar</button>

    {!! Form::close() !!}

</div>
@endsection
