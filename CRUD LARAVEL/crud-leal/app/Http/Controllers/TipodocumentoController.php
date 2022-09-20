<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tipodocumento;
use App\Models\Tipodocumento as ModelsTipodocumento;

class TipodocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipodocumentos = Tipodocumento::all();
        return view('Tipodocumento.index')->with('tipodocumentos',$tipodocumentos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipodocumento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipodocumentos = new Tipodocumento();
        $tipodocumentos-> tipoDoc =$request -> get ('tipoDoc');

        $tipodocumentos->save();

        return redirect('/documentos');
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
    public function edit($idDoc)
    {
         $tipodocumento = Tipodocumento::find($idDoc);
         return view('Tipodocumento.edit')->with('tipodocumento',$tipodocumento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idDoc)
    {
        $tipodocumento = Tipodocumento::find($idDoc);
        $tipodocumento->tipoDoc = $request->get('tipoDoc');
       
        
        $tipodocumento->update();

        return redirect('/documentos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idDoc)
    {
              
        $tipodocumento = Tipodocumento::find($idDoc);
        $tipodocumento->delete();

        return redirect('/documentos');
    }
}
