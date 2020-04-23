@extends('layouts.tema')

@section('content')
<div class="container-fluid">

    {!! Form::open(['route' => 'producto.store']) !!}
        {!! Form::label('descripcion', 'Descripción') !!}
        {!! Form::text('descripcion', null, ['class' => 'form-control', 'id' => 'descripcion']) !!}

        {!! Form::label('precio', 'Precio') !!}
        {!! Form::number('precio', null, ['class' => 'form-control', 'id' => 'precio']) !!}

        {!! Form::label('departamento', 'Departamento') !!}
        {!! Form::text('departamento', null, ['class' => 'form-control', 'id' => 'departamento']) !!}

        {!! Form::label('existencia', 'Existencia') !!}
        {!! Form::number('existencia', null, ['class' => 'form-control', 'id' => 'existencia']) !!}

        {!! Form::label('stockmin', 'Stock mínimo') !!}
        {!! Form::number('stockmin', null, ['class' => 'form-control', 'id' => 'stockmin']) !!}

        {!! Form::label('stockmax', 'Stock máximo') !!}
        {!! Form::number('stockmax', null, ['class' => 'form-control', 'id' => 'stockmax']) !!}

        {!! Form::label('imagen', 'Imagen') !!}
        {!! Form::text('imagen', null, ['class' => 'form-control', 'id' => 'imagen']) !!}

        <br>

        <button type="submit" class="btn btn-primary">Registrar</button>

    {!! Form::close() !!}

</div>
@endsection
