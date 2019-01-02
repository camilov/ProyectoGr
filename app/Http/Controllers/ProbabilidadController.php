<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Probabilidad;
use App\Riesgo;

class ProbabilidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $probabilidad = Probabilidad::orderBy('idProbabilidad','ASC')->paginate(5);
        return view('probabilidad.index')->with('probabilidad',$probabilidad);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('probabilidad.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $probabilidad = new Probabilidad($request->all());
        $probabilidad->save();
        $request->session()->flash('mensaje', 'Probabilidad Creada Con exito');
        return redirect()->route('probabilidad.index');

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
        $probabilidad = Probabilidad::findOrFail($id);
        return view('probabilidad.edit')->with('probabilidad',$probabilidad);
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
        $probabilidad=Probabilidad::findOrFail($id);
        $probabilidad->descripcion =$request->descripcion;
        $probabilidad->save();
        session()->flash('messag',  'Probabilidad ha sido Modificado.');
        return redirect()->route('probabilidad.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
