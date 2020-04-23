@extends('layouts.tema')

@section('content')
<div class="container-fluid">

    <table class="table">
        <tr>
            <th>ID</th><td>{{ $cliente->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th><td>{{ $cliente->nombre }}</td>
        </tr>
        <tr>
            <th>RFC</th><td>{{ $cliente->rfc }}</td>
        </tr>
        <tr>
            <th>Domicilio</th><td>{{ $cliente->domicilio }}</td>
        </tr>
        <tr>
            <th>Teléfono</th><td>{{ $cliente->telefono }}</td>
        </tr>
        <tr>
            <th>Correo</th><td>{{ $cliente->correo }}</td>
        </tr>
        <tr>
            <th>Sexo</th><td>{{ $cliente->sexo }}</td>
        </tr>
    </table>

</div>
@endsection
