@extends('layouts.tema')

@section('content')
<div class="container-fluid">

    <table class="table">
        <tr>
            <th>ID</th><td>{{ $user->id }}</td>
        </tr>
        <tr>
            <th>Nombre</th><td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>RFC</th><td>{{ $user->rfc }}</td>
        </tr>
        <tr>
            <th>NSS</th><td>{{ $user->nss }}</td>
        </tr>
        <tr>
            <th>Teléfono</th><td>{{ $user->telefono }}</td>
        </tr>
        <tr>
            <th>Correo</th><td>{{ $user->email }}</td>
        </tr>
        <tr>
            <th>Puesto</th><td>{{ $user->puesto }}</td>
        </tr>
    </table>

</div>
@endsection
