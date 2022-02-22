<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Traits\TraitSubirArchivo;
use Illuminate\Support\Str;

class EmpleadoController extends Controller
{
    use TraitSubirArchivo;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::paginate(5);
        return view('admin.empleado.index')->with('empleados',$empleados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $empleados = new Empleado();
        $empleados->nombres = $request->get('nombres');
        $empleados->apellidos = $request->get('apellidos');
        $empleados->email = $request->get('email');
        $empleados->telefono = $request->get('telefono');
        $empleados->rol = $request->get('rol');
        $empleados->password = $request->get('password');
        if($request->has('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::random(15);
            $folder = 'portadas';
            $imagenCargada = $this->subirArchivo($imagen, $folder, 'public', $nombreImagen);
            $empleados->imagen = $imagenCargada;
        }
        $empleados->save();
        return redirect('/admin/empleados')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);
        return view('admin.empleado.show')->with('empleado',$empleado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);
        return view('admin.empleado.edit')->with('empleado',$empleado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $empleados = Empleado::find($id);
        $empleados->nombres = $request->get('nombre');
        $empleados->apellidos = $request->get('apellidos');
        $empleados->email = $request->get('email');
        $empleados->telefono = $request->get('telefono');
        $empleados->rol = $request->get('rol');
        $empleados->password = $request->get('password');
        if($request->has('imagen')){
            $imagen = $request->file('imagen');
            $nombreImagen = Str::random(15);
            $folder = 'portadas';
            $imagenCargada = $this->subirArchivo($imagen, $folder, 'public', $nombreImagen);
            $empleados->imagen = $imagenCargada;
        }
        $empleados->save();
        return redirect('/admin/empleados')->with('editar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emplado = Empleado::find($id);
        $emplado->delete();
        return redirect('/admin/empleados')->with('eliminar','ok');
    }
}
