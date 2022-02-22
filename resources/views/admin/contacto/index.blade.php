@extends('adminlte::page')
@section('title', 'Contactos | Listar')
@section('content_header')
    <h1>Contactos</h1>
@endsection
@section('content')
    <a href="/admin/contactos/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre(s)</th>
                <th scope="col">Apellidos</th>
                <th scope="col">E-mail</th>
                <th scope="col">Mensaje</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contactos as $cont)
            <tr>
                <td>{{$cont->id}}</td>
                <td>{{$cont->nombres}}</td>
                <td>{{$cont->apellidos}}</td>
                <td>{{$cont->email}}</td>
                <td>{{$cont->mensaje}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/admin/contactos/{{$cont->id}}/edit"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('contactos.destroy',$cont->id)}}" method="POST" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $contactos->links() !!}
    </div>
@endsection
@section('js')
    @if(session('eliminar')=='ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Contacto Eliminado',
                text: 'El contacto se elimino con exito'
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
                title: 'Contacto Creado',
                text: 'Contacto creado con exito'
            });
        </script>
    @endif
    @if(session('editar')=='ok')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Contacto Editado',
            text: 'Contacto editado con exito'
        });
    </script>
@endif
@endsection