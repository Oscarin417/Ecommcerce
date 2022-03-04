@extends('adminlte::page')
@section('title', 'Categorias | Editar')
@section('content_header')
    <h1>Categorias</h1>
@endsection
@section('content')
    <form action="/admin/categorias/{{$categoria->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="pregunta" class="form-label">Categoria</label>
            <input type="text" name="categoria" class="form-control" value="{{$categoria->categoria}}">
        </div>
        <button class="btn btn-outline-success"><i class="fa-solid fa-check"></i></button>
        <a href="/admin/categorias" class="btn btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
    </form>
@endsection