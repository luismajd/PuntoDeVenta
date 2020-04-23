@extends('layouts.tema')

@section('content')

<!-- Topbar Search -->
<form action="{{ route('user.show', '1') }}" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <div class="input-group">
        <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar empleado por id..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-search fa-sm"></i>
        </button>
        </div>
    </div>
</form>

<br><br>

<div class="container-fluid">

    <hr>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>RFC</th>
            <th>NSS</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Puesto</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->rfc }}</td>
                <td>{{ $user->nss }}</td>
                <td>{{ $user->telefono }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->puesto }}</td>
            </tr>
        @endforeach
    </table>

</div>
@endsection
