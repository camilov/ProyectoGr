<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\AnalisisRs;
use app\Riesgo;
use DB;


class EvaluacionRsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
    	$riesgo = DB::table('analisis_rs')
    	              ->join('riesgo','riesgo.idRiesgo', '=','analisis_rs.idRiesgo')
                      ->join('impacto','analisis_rs.idImpacto','=','impacto.idImpacto')
                      ->join('probabilidad','analisis_rs.idProbabilidad','=','probabilidad.idProbabilidad')
    	              ->select('riesgo.idActivo','riesgo.nombre','riesgo.descripcion as riesgoDes','probabilidad.descripcion as probabilidadDes','impacto.descripcion as impactoDes','analisis_rs.idImpacto','analisis_rs.idProbabilidad','riesgo.idRiesgo',
                          DB::raw('(analisis_rs.idImpacto * analisis_rs.idProbabilidad ) as nivel'))
                      ->orderBy('nivel','desc')
    	              ->get();
    	return view('evaluacionRs.index')->with('riesgo',$riesgo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //
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
        //
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
