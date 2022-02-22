@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Tablero</h1>
@endsection

@section('content')
    <div class="row">
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/images/consola.jpg" class="card-img-top">
            <div class="card-bpdy">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">Administrar los productos</p>
                <a class="btn btn-primary" href="/admin/productos">Ir <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/images/categoria.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Categorias</h5>
                <p class="card-text">Administrar las categorias</p>
                <a class="btn btn-primary" href="/admin/categorias">Ir <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/images/comentario.jpg" class="card-img-top">
            <div class="card-bod">
                <h5 class="card-title">Comentarios</h5>
                <p class="card-text">Administrar los comentarios</p>
                <a class="btn btn-primary" href="/admin/comentarios">Ir <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/images/contacto.jpg" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Contactos</h5>
                <p class="card-text">Administrar los contactos</p>
                <a class="btn btn-primary" href="/admin/contactos">Ir <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/images/empleado.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Empleados</h5>
                <p class="card-text">Administrar los empleados</p>
                <a class="btn btn-primary" href="/admin/empleados">Ir <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="http://localhost/Proyecto1/ecommerce/public/images/faq.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">FAQS</h5>
                <p class="card-text">Administrar las preguntas</p>
                <a class="btn btn-primary" href="/admin/faqs">Ir <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
@endsection