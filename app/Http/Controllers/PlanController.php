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
       /* $plan = DB::table('plan')
                      ->join('riesgo','riesgo.idRiesgo', '=','plan.idRiesgo')
                      ->join('opcion_tratamiento','opcion_tratamiento.idOpcionTratamiento','=','plan.idOpcionTratamiento')
                      ->select('riesgo.nombre as riesgo','opcion_tratamiento.nombre as opcion','accion','responsable','duracion','criterio','idPlan')
                      ->orderBy('idPlan','desc')
                      ->get();*/

        return view('plan.index');
    }


    public function listall(){

        $plan = DB::table('plan')
                      ->join('riesgo','riesgo.idRiesgo', '=','plan.idRiesgo')
                      ->join('opcion_tratamiento','opcion_tratamiento.idOpcionTratamiento','=','plan.idOpcionTratamiento')
                      ->select('riesgo.nombre as riesgo','opcion_tratamiento.nombre as opcion','accion','responsable','duracion','criterio','idPlan')
                      ->orderBy('idPlan','desc')
                      ->get();

        return view('plan.listall');
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
                      ->select('control.descripcion as desc')
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
        $request->session()->flash('mensaje', 'Plan Creado Con exito');
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
        $plan = Plan::findOrFail($id);
        return view('plan.edit')->with('plan',$plan);
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
        $plan=Plan::findOrFail($id);
        $plan->accion =$request->accion;
        $plan->responsable =$request->responsable;
        $plan->duracion =$request->duracion;
        $plan->criterio =$request->criterio;
        $plan->save();
        session()->flash('messag',  'Plan Modificado.');
        return redirect()->route('plan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plan = Plan::findOrFail($id);
        $plan->delete();
        session()->flash('message',  'Plan eliminado.');
        return redirect()->route('plan.index');
    }
}
