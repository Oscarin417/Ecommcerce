@extends('adminlte::page')
@section('title', 'Dashboard')
@section('content_header')
    <h1>Dashboard</h1>
@endsection
@section('content')
    <div class="col">
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/consola.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">Administrar Productos</p>
                <a href="/admin/productos" class="btn btn-primary">Ir</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/faq.png" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">FAQS</h5>
                <p class="card-text">Administrar FAQS</p>
                <a href="/admin/faqs" class="btn btn-primary">Ir</a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/comentario.jpg" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">Comentarios</h5>
                <p class="card-text">Administrar comentarios</p>
                <a href="/admin/comentarios" class="btn btn-primary">Ir</a>
            </div>
        </div>
    </div>
@endsection
@endsection
