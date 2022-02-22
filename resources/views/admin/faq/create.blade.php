@extends('adminlte::page')
@section('title', 'FAQS | Crear')
@section('content_header')
    <h1>FAQ</h1>
@endsection
@section('content')
    <form action="/admin/faqs" method="POST">
        @csrf
        <div class="mb-3">
            <label for="pregunta" class="form-label">Pregunta</label>
            <input type="text" name="pregunta" class="form-control">
        </div>
        <button class="btn btn-outline-success"><i class="fa-solid fa-check"></i></button>
        <a href="/admin/faqs" class="btn btn-outline-danger"><i class="fa-solid fa-xmark"></i></a>
    </form>
@endsection