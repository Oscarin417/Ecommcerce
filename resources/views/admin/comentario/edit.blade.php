@extends('adminlte::page')
@section('title', 'Comentarios | Crear')
@section('content_header')
    <h1>Crear</h1>
@endsection
@section('content')
    <form action="/admin/comentarios/{{$comentario->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <input type="text" name="titulo" class="form-control" placeholder="Titulo" value="{{$comentario->titulo}}">
        </div>
        <div class="mb-3">
            <textarea name="comentario" placeholder="Comentario" value="{{$comentario->comentario}}"></textarea>
        </div>
        <button class="btn btn-success btn-lg" type="submit"><i class="fa-solid fa-check"></i></button>
        <a class="btn btn-danger btn-lg" href="/admin/comentarios"><i class="fa-solid fa-xmark"></i></a>
    </form>
@endsection