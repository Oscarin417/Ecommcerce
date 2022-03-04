@extends('adminlte::page')
@section('title', 'Usuarios | Editar')
@section('content_header')
    <h1>Usuarios</h1>
@endsection
@section('content')
    <div class="card text-center" style="width: 18rem;">
        <img src="http:\\localhost\Proyecto1\ecommerce\public\images\empleado.png" class="card-img-top">
        <div class="card-body">
            <form action="/admin/usuarios/{{$usuario->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="nombres" class="form-control" placeholder="Nombre(s)" value="{{$usuario->nombres}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                    <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" value="{{$usuario->apellidos}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>
                    <input type="email" name="email" class="form-control" placeholder="E-Mail" value="{{$usuario->email}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                    <input type="number" name="telefono" class="form-control" placeholder="Telefono" value="{{$usuario->telefono}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                    <input type="number" name="cp" class="form-control" placeholder="Codigo Postal" value="{{$usuario->cp}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" name="municipio" class="form-control" placeholder="Municipio" value="{{$usuario->municipio}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                    <input type="text" name="colonia" class="form-control" placeholder="Colonia" value="{{$usuario->colonia}}">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"><i class="fa-solid fa-key"></i></span>
                    <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" value="{{$usuario->contraseña}}">
                </div>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-check"></i></button>
                <a class="btn btn-danger" href="/admin/usuarios"><i class="fa-solid fa-xmark"></i></a>
            </form>
        </div>
    </div>
@endsection