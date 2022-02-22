@extends('adminlte::page')
@section('content')
    <div class="card" style="width: 18rem;">
        <img src="{{asset('storage/'.$empleado->imagen)}}" class="card-img-top" alt="auto">
        <div class="card-body">
            <h5 class="card-title">Nombre(s): {{$empleado->nombres}}</h5>
            <h5 class="card-title">Apellidos; {{$empleado->apellidos}}</h5>
            <p class="card-text">E-mail: {{$empleado->email}}</p>
            <p class="card-text">Telefono: {{$empleado->telefono}}</p>
            <p class="card-text">Rol: {{$empleado->rol}}</p>
            <a class="btn btn-priary" href="/admin/empleados">Volver</a>
        </div>
    </div>
@endsection