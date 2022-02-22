@extends('adminlte::page')
@section('title', 'Comentarios | Listar')
@section('content_header')
    <h1>Comentarios</h1>
@endsection
@section('content')
    <a href="/admin/comentarios/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Comentario</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($comentario as $com)
            <tr>
                <td>{{$com->id}}</td>
                <td>{{$com->titulo}}</td>
                <td>{{$com->comentario}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/admin/comentarios/{{$com->id}}/edit"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('comentarios.destroy', $com->id)}}" class="form-delete">
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
        {!! $comentario->links() !!}
    </div>
@endsection
@section('js')
    @if(session('eliminar')=='ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Comentario Eliminado',
                text: 'El comentario se elimino con exito'
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
                title: 'Comentario Creado',
                text: 'Comentario creado con exito'
            });
        </script>
    @endif
    @if(session('editar')=='ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Comentario Editado',
                text: 'Comentario editado con exito'
            });
        </script>
    @endif
@endsection