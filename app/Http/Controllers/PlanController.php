<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
        
        $riesgo = 
        Riesgo::join('plan','plan.idRiesgo','=','riesgo.idRiesgo')
              ->select('riesgo.nombre','riesgo.idRiesgo')->pluck('riesgo.nombre',
                       'riesgo.idRiesgo');
        
        return view('plan.index')->with('riesgo',$riesgo);
    }

    public function listar($idRiesgo){

        $plan = DB::table('plan')->distinct()
                    ->join('riesgo as r','r.idRiesgo', '=','plan.idRiesgo')
                    ->join('opcion_tratamiento','opcion_tratamiento.idOpcionTratamiento','=','plan.idOpcionTratamiento')
                    ->join('acciones as ac','ac.idRiesgo','=','plan.idRiesgo')
                    ->join('control','control.idControlL','=','plan.idControlL')
                    ->select('r.nombre as riesgo','opcion_tratamiento.nombre as opcion','ac.accion as accion','responsable','ac.duracion as duracion','idPlan','control.nombre','control.descripcion')
                      ->where('plan.idRiesgo','=',$idRiesgo)
                      ->orderBy('idPlan','desc')
                      ->get();
                      /**/
        dd($plan);
        return view('plan.listar')->with('plan',$plan);

    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idRiesgo,$idOpcionTratamiento,$idControlL)
    {
        
       $accion = DB::table('controles')->distinct()
                        ->select('controles.idControlL as idControlL')
                        ->where('controles.idRiesgo','=',$idRiesgo)
                        ->get();

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
        $idRiesgo1            = $request->input('idRiesgo');
        $idOpcionTratamiento1 = $request->input('idOpcionTratamiento');

        $idControlL1 = DB::table('controles')->distinct()
                             ->select('controles.idControlL')
                             ->where([['controles.idRiesgo',            '=', $idRiesgo1],
                                      ['controles.idOpcionTratamiento', '=', $idOpcionTratamiento1]
                                    ])
                             ->get();

       $array = array();
       foreach($idControlL1 as $t){

            $array[] = $t->idControlL;

        }

        $longitud = count($array);

        for($i=0; $i<$longitud; $i++)
        {

            $plan = new Plan();
            $plan->idRiesgo            = $request->input('idRiesgo');
            $plan->idOpcionTratamiento = $request->input('idOpcionTratamiento');
            $plan->responsable         = $request->input('responsable');
            $plan->idControlL          = $array[$i];
            $plan->save();
        }
        
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
