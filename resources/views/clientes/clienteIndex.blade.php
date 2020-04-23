@extends('layouts.tema')

@section('content')

<!-- Topbar Search -->
<form action="{{ route('cliente.show', '1') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar cliente por id..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search fa-sm"></i>
        </button>
        </div>
    </div>
</form>

<br><br>

<div class="container-fluid">

    <a href="{{ route('cliente.create') }}" class="btn btn-success">Nuevo Cliente</a>
    <hr>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>RFC</th>
            <th>Domicilio</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Sexo</th>
        </tr>
        @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->id }}</td>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->rfc }}</td>
                <td>{{ $cliente->domicilio }}</td>
                <td>{{ $cliente->telefono }}</td>
                <td>{{ $cliente->correo }}</td>
                <td>{{ $cliente->sexo }}</td>
            </tr>
        @endforeach
    </table>

</div>

@endsection
