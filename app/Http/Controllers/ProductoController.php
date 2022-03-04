<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Traits\TraitSubirArchivo;
use Illuminate\Support\Str;


class ProductoController extends Controller
{
    use TraitSubirArchivo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::all();
        return response()->json($productos);
        //return view('admin.producto.index')->with('productos',$productos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.producto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = Producto::create($request->post());
        return response()->json([
            'producto' => $producto
        ]);
        /*
        $productos = new Producto();
        $productos->nombre = $request->get('nombre');
        $productos->precio = $request->get('precio');
        $productos->cantidad = $request->get('cantidad');
        $productos->descripcion = $request->get('descripcion');
        $productos->categoria = $request->get('categoria');
        if($request->has('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::random(15);
            $folder = 'portadas';
            $imagenCargada = $this->subirArchivo($imagen, $folder, 'public', $nombreImagen);
            $productos->imagen = $imagenCargada;
        }
        $productos->save();
        return redirect('/admin/productos')->with('crear','ok');
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return response()->json($producto);
        /*
        $producto = Producto::find($id);
        return view('admin.producto.show')->with('producto',$producto);
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /*
        $producto = Producto::find($id);
        return view('admin.producto.edit')->with('producto',$producto);
        */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->fill($request->post())->save();
        return response()->json([
            'producto' => $producto
        ]);
        /*$producto = Producto::find($id);
        $producto->nombre = $request->get('nombre');
        $producto->precio = $request->get('precio');
        $producto->cantidad = $request->get('cantidad');
        $producto->descripcion = $request->get('descripcion');
        $producto->categoria = $request->get('categoria');
        if($request->has('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::random(15);
            $folder = 'portadas';
            $imagenCargada = $this->subirArchivo($imagen, $folder, 'public', $nombreImagen);
            $producto->imagen = $imagenCargada;
        }
        $producto->save();
        return redirect('/admin/productos')->with('editar','ok');*/
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return response()->json([
            'mensaje' => 'Producto eliminado'
        ]);
        /*$producto = Producto::find($id);
        $producto->delete();
        return redirect('/admin/productos')->with('eliminar','ok');*/
    }
}
