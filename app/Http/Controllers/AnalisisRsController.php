<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AnalisisRs;
use App\Riesgo;
use App\Impacto;
use App\Probabilidad;


class AnalisisRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $analisisRs = AnalisisRs::orderBy('idAnalisisRs','ASC')->paginate(5);

        return view('analisisRs.index')->with('analisisRs',$analisisRs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riesgo = Riesgo::select('nombre','idRiesgo')->pluck('nombre','idRiesgo');
        $impacto = Impacto::select('descripcion','idImpacto')->pluck('descripcion','idImpacto');
        $probabilidad = Probabilidad::select('descripcion','idProbabilidad')->pluck('descripcion','idProbabilidad');
        return view('analisisRs.create')->with('riesgo',$riesgo)->with('impacto',$impacto)
                   ->with('probabilidad',$probabilidad);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $analisisRs = new AnalisisRs($request->all());
        $analisisRs->save();

        return redirect()->route('analisisRs.index');
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
        $analisisRs = AnalisisRs::findOrFail($id);
        $impacto = Impacto::select('descripcion','idImpacto')->pluck('descripcion','idImpacto');
        $probabilidad = Probabilidad::select('descripcion','idProbabilidad')->pluck('descripcion','idProbabilidad');
        return view('analisisRs.edit')->with('analisisRs',$analisisRs)->with('impacto',$impacto)->with('probabilidad',$probabilidad);
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

        $analisisRs=AnalisisRs::findOrFail($id);
        $analisisRs->idProbabilidad =$request->idProbabilidad;
        $analisisRs->idImpacto =$request->idImpacto;
        $analisisRs->save();
        session()->flash('messag',  'Registro Modificado.');
        return redirect()->route('analisisRs.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $analisisRs = AnalisisRs::findOrFail($id);
        $analisisRs->delete();
        session()->flash('message',  'Registro  eliminado.');
        return redirect()->route('analisisRs.index');
    }
}
