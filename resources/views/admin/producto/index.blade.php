@extends('adminlte::page')
@section('title', 'Productos | Listar')
@section('content_header')
    <h1>Productos</h1>
@endsection
@section('content')
    <a href="/admin/productos/create" class="btn btn-primary"><i class="fa-solid fa-plus"></i></a>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Categoria</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
             @foreach($productos as $pro)
             <tr>
                 <td>{{$pro->id}}</td>
                 <td>{{$pro->nombre}}</td>
                 <td>${{$pro->precio}}</td>
                 <td>{{$pro->cantidad}}</td>
                 <td>{{$pro->categoria}}</td>
                 <td>{{$pro->descripcion}}</td>
                 <td><img src="{{asset('storage/'.$pro->imagen)}}" width="33.3%"></td>
                 <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a class="btn btn-warning" href="/admin/productos/{{$pro->id}}/edit"><i class="fa-solid fa-pencil"></i></a>
                        <form action="{{route('productos.destroy',$pro->id)}}" method="POST" class="form-delete">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                        <a class="btn btn-secondary" href="/admin/productos/{{$pro->id}}"><i class="fa-solid fa-circle-info"></i></a>
                    </div>
                 </td>
             </tr>
             @endforeach
        </tbody>
    </table>
    <div class="d-flex">
        {!! $productos->links() !!}
    </div>
@endsection
@section('js')
    @if(session('eliminar')=='ok')
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Producto Eliminado',
                text: 'El producto se elimino con exito'
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
                title: 'Producto Creado',
                text: 'El producto fue creado con exito'
            });
        </script>
    @endif
    @if(session('editar')=='ok')
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Producto Editado',
            text: 'El producto fue editado con exito'
        });
    </script>
@endif
@endsection