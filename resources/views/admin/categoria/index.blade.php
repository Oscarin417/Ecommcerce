@extends('adminlte::page')
@section('title', 'Categorias | Listar')
@section('content_header')
    <h1>Categorias</h1>
@endsection
@section('content')
    <a href="/admin/categorias/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Categoria</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $cat)
            <tr>
                <td>{{$cat->id}}</td>
                <td>{{$cat->categoria}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/admin/categorias/{{$cat->id}}/edit"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('categorias.destroy', $cat->id)}}" method="POST" class="form-delete">
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
        {!! $categorias->links() !!}
    </div>
@endsection
@section('js')
    @if(session('eliminar')=='ok')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Categoria Eliminada',
            text: 'La pregunta se elimino con exito'
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
            title: 'Categoria Creada',
            text: 'Pregunta creada con exito'
        });
    </script>
    @endif
    @if(session('editar')=='ok')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Categoria Editada',
            text: 'Pregunta editada con exito'
        });
    </script>
    @endif
@endsection