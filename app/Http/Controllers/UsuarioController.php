<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::paginate(5);
        return view('admin.usuario.index')->with('usuarios',$usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuarios = New Usuario();
        $usuarios->nombres = $request->get('nombres');
        $usuarios->apellidos = $request->get('apellidos');
        $usuarios->email = $request->get('email');
        $usuarios->telefono = $request->get('telefono');
        $usuarios->cp = $request->get('cp');
        $usuarios->municipio = $request->get('municipio');
        $usuarios->colonia = $request->get('colonia');
        $usuarios->contraseña = $request->get('contraseña');
        $usuarios->save();
        return redirect('/admin/usuarios')->with('crear','ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);
        return view('admin.usuario.edit')->with('usuario',$usuario);
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
        $usuario = Usuario::find($id);
        $usuario->nombres = $request->get('nombres');
        $usuario->apellidos = $request->get('apellidos');
        $usuario->email = $request->get('email');
        $usuario->telefono = $request->get('telefono');
        $usuario->cp = $request->get('cp');
        $usuario->municipio = $request->get('municipio');
        $usuario->colonia = $request->get('colonia');
        $usuario->contraseña = $request->get('contraseña');
        $usuario->save();
        return redirect('/admin/usuarios')->with('editar','ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->destroy();
        return redirect('/admin/usuarios')->with('eliminar','ok');
    }
}
