@extends('adminlte::page')
@section('title', 'Productos | Show')
@section('content_header')
    <h1>Productos</h1>
@endsection
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$producto->imagen)}}" class="card-img-top">
        <div class="card-body">
            <h5 class="card-tittle">Nombre: {{$producto->nombre}}</h5>
            <h6 class="card-text">Precio: ${{$producto->precio}}</h6>
            <h6 class="card-text">Categoria: {{$producto->categoria}}</h6>
            <p class="card-text">Cantidad: {{$producto->cantidad}}</p>
            <p class="card-text">Descripcion: {{$producto->descripcion}}</p>
            <a class="btn btn-primary" href="/admin/productos">Volver</a>
        </div>
    </div>
@endsection