<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Plan;
use App\Riesgo;
use App\Tratamiento;
use App\opcionTratamiento;
//use DB;


class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$plan = Plan::orderBy('idPlan','ASC')->paginate(5);
        $plan = DB::table('plan')
                      ->join('riesgo','riesgo.idRiesgo', '=','plan.idRiesgo')
                      ->join('opcion_tratamiento','opcion_tratamiento.idOpcionTratamiento','=','plan.idOpcionTratamiento')
                      ->select('riesgo.nombre as riesgo','opcion_tratamiento.nombre as opcion','accion','responsable','duracion','criterio')
                      //->where('controles.idRiesgo','=',$idRiesgo)
                      ->orderBy('idPlan','desc')
                      ->get();
       // dd($plan);
        return view('plan.index')->with('plan',$plan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idRiesgo,$idOpcionTratamiento)
    {
        //$accion = DB::table('control')->select('nombre')->where('idRiesgo','=', $idRiesgo)->get();
        
       $accion = DB::table('controles')
                      ->join('control','control.idControl', '=','controles.idControl')
                      ->select('control.descripcion')
                      ->where('controles.idRiesgo','=',$idRiesgo)
                      ->orderBy('idControles','desc')
                      ->get();
        //dd($accion);

        return view('plan.create')->with('accion',$accion)->with('idRiesgo',$idRiesgo)->with('idOpcionTratamiento',$idOpcionTratamiento);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $plan = new Plan($request->all());
        $plan->save();
        return redirect()->route('plan.index');
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
