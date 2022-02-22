@extends('adminlte::page')
@section('title', 'Empleados | Listar')
@section('content_header')
    <h1>Empleados</h1>
@endsection
@section('content')
    <a class="btn btn-primary" href="/admin/empleados/create"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Email</th>
                <th scope="col">Telefono</th>
                <th scope="col">Imagen</th>
                <th scope="col">Rol</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($empleados as $emp)
            <tr>
                <td>{{$emp->id}}</td>
                <td>{{$emp->nombres}}</td>
                <td>{{$emp->apellidos}}</td>
                <td>{{$emp->email}}</td>
                <td>{{$emp->telefono}}</td>
                <td><img src="{{asset('storage/'.$emp->imagen)}}" width="8%"></td>
                <td>{{$emp->rol}}</td>
                <td>{{$emp->password}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="/admin/empleados/{{$emp->id}}/edit" class="btn btn-warning"><i class="fa-solid fa-pencil"></a>
                        <form action="{{route('empleados.destroy',$emp->id)}}" method="POST" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $empleados->links() !!}
    </div>
@endsection
@section('js')
@if(session('eliminar')=='ok')
<script>
    Swal.fire({
        icon: 'success',
        title: 'Empleado Eliminado',
        text: 'El empleado se elimino con exito'
    });
</script>
@endif
<script>
$('.form-delete').submit(function(e){
    e.preventDefault();
        Swal.fire({
        title: 'estas seguro de eliminarlo?',
        text: "Una vez eliminado el registro no podras recuperarlo!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Eliminar'
    }).then((result) => {
        if (result.isConfirmed) {
            this.submit();
        }
    })
    }
);
</script>
@if(session('crear')=='ok')
<script>
    Swal.fire({
        icon: 'success',
        title: 'Empleado Creado',
        text: 'El empleado se creo con exito'
    });
</script>
@endif
@if(session('editar')=='ok')
<script>
    Swal.fire({
        icon: 'success',
        title: 'Empleado Editado',
        text: 'El empleado se a editado con exito'
    });
</script>
@endif
@endsection