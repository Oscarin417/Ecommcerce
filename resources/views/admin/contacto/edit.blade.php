@extends('adminlte::page')
@section('title', 'Contactos | Editar')
@section('content_header')
    <h1>Editar</h1>
@endsection
@section('content')
    <form action="/admin/contactos/{{$contacto->id}}" method="POST" class="row g-3">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="nombres">Nombre(s)</label>
            <input type="text" name="nombres" class="form-control" value="{{$contacto->nombres}}">
        </div>
        <div class="col-md-6">
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" class="form-control" value="{{$contacto->apellidos}}">
        </div>
        <div class="col-12">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" value="{{$contacto->email}}">
        </div>
        <div class="col-12">
            <label for="mensaje">Mensaje</label>
            <textarea name="mensaje" class="form-control" value="{{$contacto->mensaje}}"></textarea>
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-success btn-lg">Enviar</button>
        </div>
    </form>
@endsection