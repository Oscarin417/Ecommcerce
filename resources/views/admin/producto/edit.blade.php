@extends('adminlte::page')
@section('title', 'Productos | Editar')
@section('content_header')
    <h1>Eitar</h1>
@endsection
@section('content')
    <form action="/admin/productos/{{$producto->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}">
        </div>
        <div class="mb-3">
            <label for="precio">Precio</label>
            <input type="text" name="precio" class="form-control" value="{{$producto->precio}}">
        </div>
        <div class="mb-3">
            <label for="cantidad">Cantidad</label>
            <input type="text" name="cantidad" class="form-control" value="{{$producto->cantidad}}">
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}">
        </div>
        <div class="mb-3">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control" value="{{$producto->imagen}}">
        </div>
        <button class="btn btn-success btn-lg" type="submit"><i class="fa-solid fa-check"></i></button>
        <a class="btn btn-danger btn-lg" href="/admin/productos"><i class="fa-solid fa-xmark"></i></a>
    </form>
@endsection