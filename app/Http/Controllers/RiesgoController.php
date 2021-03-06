<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Riesgo;
use App\Activo;



class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riesgo = Riesgo::orderBy('idRiesgo','ASC')->paginate(5);

        return view('riesgo.index')->with('riesgo',$riesgo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activo = Activo::select('nombre','idActivo')->pluck('nombre','idActivo');
        return view('riesgo.create')->with('activo',$activo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riesgo = new Riesgo($request->all());
        $riesgo->save();
        $request->session()->flash('mensaje', 'Riesgo Creado Con exito');
        return redirect()->route('riesgo.index');

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
        $riesgo = Riesgo::findOrFail($id);
        return view('riesgo.edit')->with('riesgo',$riesgo);
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
        $riesgo=Riesgo::findOrFail($id);
        $riesgo->proceso =$request->proceso;
        $riesgo->nombre =$request->nombre;
        $riesgo->descripcion =$request->descripcion;
        $riesgo->causa =$request->causa;
        $riesgo->efecto =$request->efecto;
        $riesgo->fuente =$request->fuente;
        $riesgo->save();
        session()->flash('messag',  'Riesgo Modificado.');
        return redirect()->route('riesgo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $riesgo = Riesgo::findOrFail($id);
        $riesgo->delete();
        session()->flash('message',  'Riesgo eliminado.');
        return redirect()->route('riesgo.index');
    }
}
