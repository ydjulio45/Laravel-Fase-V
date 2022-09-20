<?php

namespace App\Http\Controllers;

use App\Models\proveedore;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedore = Proveedore::all();
        return view('Proveedores.index')->with('proveedore',$proveedore);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedore = new proveedore();
        $proveedore-> nombre =$request -> get ('nombre');
        $proveedore-> telefono =$request -> get ('telefono');
        $proveedore-> correo =$request -> get ('correo');
        $proveedore-> direccion =$request -> get ('direccion');

        $proveedore->save();

        return redirect('/proveedores');
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
    public function edit($idProveedor)
    {
        $proveedore = proveedore::find($idProveedor);
        return view('Proveedores.edit')->with('proveedore',$proveedore);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idProveedor)
    {
        $proveedore = proveedore::find($idProveedor);
        $proveedore->nombre = $request->get('nombre');
        $proveedore->telefono = $request->get('telefono');
        $proveedore->correo = $request->get('correo');
        $proveedore->direccion = $request->get('direccion');
       
        
        $proveedore->update();

        return redirect('/proveedores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idProveedor)
    {
        $proveedore = proveedore::find($idProveedor);
        $proveedore->delete();

        return redirect('/proveedores');
    }
}
