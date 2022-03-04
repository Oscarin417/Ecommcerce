@extends('adminlte::page')
@section('title', 'Usuarios | Crear')
@section('content_header')
    <h1>Usuarios</h1>
@endsection
@section('content')
    <div class="border border-dark">
        <form action="/admin/usuarios" method="POST">
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="nombres" class="form-control" placeholder="Nombre(s)">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                <input type="text" name="apellidos" class="form-control" placeholder="Apellidos">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                <input type="email" name="email" class="form-control" placeholder="E-Mail">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                <input type="number" name="telefono" class="form-control" placeholder="Telefono">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                <input type="number" name="cp" class="form-control" placeholder="Codigo Postal">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                <input type="text" name="municipio" class="form-control" placeholder="Municipio">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                <input type="text" name="colonia" class="form-control" placeholder="Colonia">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                <input type="password" name="contraseña" class="form-control" placeholder="Contraseña">
            </div>
            <button class="btn btn-success" type="submit"><i class="fa-solid fa-check"></i></button>
            <a class="btn btn-danger" href="/admin/usuarios"><i class="fa-solid fa-xmark"></i></a>
        </form>
    </div>
@endsection