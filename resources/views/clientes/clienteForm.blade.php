@extends('layouts.tema')

@section('content')
<div class="container-fluid">

    {!! Form::open(['route' => 'cliente.store']) !!}
        {!! Form::label('nombre', 'Nombre del cliente') !!}
        {!! Form::text('nombre', null, ['class' => 'form-control', 'id' => 'nombre']) !!}

        {!! Form::label('rfc', 'RFC') !!}
        {!! Form::text('rfc', null, ['class' => 'form-control', 'id' => 'rfc']) !!}

        {!! Form::label('domicilio', 'Domicilio') !!}
        {!! Form::text('domicilio', null, ['class' => 'form-control', 'id' => 'domicilio']) !!}

        {!! Form::label('telefono', 'Teléfono') !!}
        {!! Form::text('telefono', null, ['class' => 'form-control', 'id' => 'telefono']) !!}

        {!! Form::label('correo', 'Correo') !!}
        {!! Form::text('correo', null, ['class' => 'form-control', 'id' => 'correo']) !!}

        {!! Form::label('sexo', 'Sexo') !!}
        {!! Form::select('sexo', ['H' => 'Hombre', 'M' => 'Mujer'], null, ['class' => 'form-control', 'id' => 'sexo']) !!}

        <br>

        <button type="submit" class="btn btn-primary">Registrar</button>

    {!! Form::close() !!}

</div>
@endsection
