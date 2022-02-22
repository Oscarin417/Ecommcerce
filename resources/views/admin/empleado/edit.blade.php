@extends('adminlte::page')
@section('title', 'Empleados | Editar')
@section('content_header')
    <h1>Empleados</h1>
@endsection
@section('content')
    <form action="/admin/empleados/{{$empleado->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre(s)</label>
            <input type="text" name="nombres" class="form-control" value="{{$empleado->nombres}}">
        </div>
        <div class="mb-3">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" value="{{$empleado->apellidos}}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" name="email" class="form-control" value="{{$empleado->email}}">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" name="telefono" class="form-control" value="{{$empleado->telefono}}">
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input type="file" name="imagen" class="form-control" value="{{$empleado->imagen}}">
        </div>
        <div class="mb-3">
            <label for="rol" class="form-label">Rol</label>
            <select name="rol" class="form-select">
                <option selected>Elige tu rol</option>
                <option value="empleado">Empleado</option>
                <option value="administrador">Administrador</option>
                <option value="gerente">Gerente</option>
                <option value="lider">Lider</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="password">Contraseña</label>
            <input type="password" name="password" class="form-control" value="{{$empleado->password}}">
        </div>
        <button class="btn btn-success btn-lg" type="submit"><i class="fa-solid fa-check"></i></button>
        <a class="btn btn-danger btn-lg" href="/admin/empleados"><i class="fa-solid fa-xmark"></i></a>
    </form>
@endsection