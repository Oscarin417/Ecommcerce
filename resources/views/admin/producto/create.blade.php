@extends('adminlte::page')
@section('title', 'Productos | Crear')
@section('content_header')
    <h1>Crear</h1>
@endsection
@section('content')
    <form action="/admin/productos" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>
        <div class="mb-3">
            <label for="precio">Precio</label>
            <input type="text" name="precio" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cantidad">Cantidad</label>
            <input type="text" name="cantidad" class="form-control">
        </div>
        <div class="mb-3">
            <label for="categoria">Categoria</label>
            <select name="categoria" class="form-select" aria-label="Default select example">
                <option selected>Elige una categoria</option>
                <option value="accion">Accion</option>
                <option value="terror">Terror</option>
                <option value="aventura">Aventura</option>
                <option value="misterio">Misterio</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripcion</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="imagen">Imagen</label>
            <input type="file" name="imagen" class="form-control">
        </div>
        <button class="btn btn-success btn-lg" type="submit"><i class="fa-solid fa-check"></i></button>
        <a class="btn btn-danger btn-lg" href="/admin/productos"><i class="fa-solid fa-xmark"></i></a>
    </form>
@endsection