<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Factura;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factura = Factura::all();
        return view('Facturas.index')->with('factura',$factura);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new Factura();
        $factura-> idUsuario =$request -> get ('idUsuario');
        $factura-> nombre =$request -> get ('nombre');
        $factura-> fecha =$request -> get ('fecha');
        $factura-> preciofact =$request -> get ('preciofact');

        $factura->save();

        return redirect('/facturas');
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
    public function edit($idFactura)
    {
        $factura = Factura::find($idFactura);
         return view('Facturas.edit')->with('factura',$factura);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idFactura)
    {
        $factura = Factura::find($idFactura);
        $factura->idUsuario = $request->get('idUsuario');
        $factura->nombre = $request->get('nombre');
        $factura->fecha = $request->get('fecha');
        $factura->preciofact = $request->get('preciofact');
       
        
        $factura->update();

        return redirect('/facturas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idFactura)
    {
        $factura = Factura::find($idFactura);
        $factura->delete();

        return redirect('/facturas');
    }
}
