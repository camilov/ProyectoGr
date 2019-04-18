<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AnalisisRs;
use App\Riesgo;
use App\Activo;
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
                      ->join('activo','analisis_rs.idActivo','=','activo.idActivo')
                      ->select('activo.nombre as nomactivo','riesgo.nombre','riesgo.descripcion as riesgoDes','probabilidad.descripcion as probabilidadDes','impacto.descripcion as impactoDes','analisis_rs.idImpacto','analisis_rs.idProbabilidad','riesgo.idRiesgo',
                          DB::raw('(analisis_rs.idImpacto * analisis_rs.idProbabilidad) as nivel'))
                    ->orderBy('nivel','desc')
                    ->get();

                   // dd($riesgo);
    	return view('evaluacionRs.index')->with('riesgo',$riesgo);
    }

    
}
