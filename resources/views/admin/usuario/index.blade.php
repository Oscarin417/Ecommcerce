@extends('adminlte::page')
@section('title', 'Usuarios | Listar')
@section('content_header')
    <h1>Usuarios</h1>
@endsection
@section('content')
    <a class="btn btn-primary" href="/admin/usuarios/create"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Apellidos</th>
                <th scope="col">E-mail</th>
                <th scope="col">Telefono</th>
                <th scope="col">Codigo Postal</th>
                <th scope="col">Municipio</th>
                <th scope="col">Colonia</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usu)
            <tr>
                <td>{{$usu->id}}</td>
                <td>{{$usu->nombres}}</td>
                <td>{{$usu->apellidos}}</td>
                <td>{{$usu->email}}</td>
                <td>{{$usu->telefono}}</td>
                <td>{{$usu->cp}}</td>
                <td>{{$usu->municipio}}</td>
                <td>{{$usu->colonia}}</td>
                <td>{{$usu->contraseña}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/admin/usuarios/{{$usu->id}}/edit"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('usuarios.destroy',$usu->id)}}" method="POST" class="form-delete">
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
        {!! $usuarios->links() !!}
    </div>
@endsection
@section('js')
    @if(session('eliminar')=='ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Usuario Eliminado',
                text: 'El usuario se elimino con exito'
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
                title: 'Usuario Creado',
                text: 'El usuario fue creado con exito'
            });
        </script>
    @endif
    @if(session('editar')=='ok')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Usuario Editado',
            text: 'El usuario fue editado con exito'
        });
    </script>
@endif
@endsection