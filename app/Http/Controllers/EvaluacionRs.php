<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use app\AnalisisRs;
use app\Riesgo;
use DB;


class EvaluacionRs extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$riesgo = DB::table('riesgo')
    	              ->join('analisis_rs','riesgo.idRiesgo', '=','analisis_rs.idRiesgo')
    	              ->select('riesgo.id_activo','analisis_rs.idImpacto','analisis_rs.idProbabilidad')
    	              ->get();
    	return view('evaluacionRs.index')->with('riesgo',$riesgo);
        /*$analisisRs = AnalisisRs::orderBy('idAnalisisRs','ASC')->paginate(5);

        return view('analisisRs.index')->with('analisisRs',$analisisRs);*/
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
