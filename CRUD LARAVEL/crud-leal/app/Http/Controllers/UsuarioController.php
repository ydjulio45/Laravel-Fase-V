<?php

namespace App\Http\Controllers;

use App\Models\usuario;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::all();
        return view('Usuarios.index')->with('usuario',$usuario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario = new Usuario();
        $usuario-> idDoc =$request -> get ('idDoc');
        $usuario-> idRol =$request -> get ('idRol');
        $usuario-> pNombre =$request -> get ('pNombre');
        $usuario-> sNombre =$request -> get ('sNombre');
        $usuario-> pApellido =$request -> get ('pApellido');
        $usuario-> sApellido =$request -> get ('sApellido');
        $usuario-> correo =$request -> get ('correo');
        $usuario-> contraseña =$request -> get ('contraseña');

        $usuario->save();

        return redirect('/usuarios');
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
    public function edit($idUsuario)
    {
        $usuario = Usuario::find($idUsuario);
         return view('Usuarios.edit')->with('usuario',$usuario);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idUsuario)
    {
        $usuario = Usuario::find($idUsuario);
        $usuario->idDoc = $request->get('idDoc');
        $usuario->idRol = $request->get('idRol');
        $usuario->pNombre = $request->get('pNombre');
        $usuario->sNombre = $request->get('sNombre');
        $usuario->pApellido = $request->get('pApellido');
        $usuario->sApellido = $request->get('sApellido');
        $usuario->correo = $request->get('correo');
        $usuario->contraseña = $request->get('contraseña');
       
        
        $usuario->update();

        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idUsuario)
    {
        $usuario = Usuario::find($idUsuario);
        $usuario->delete();

        return redirect('/usuarios');
    }
}
