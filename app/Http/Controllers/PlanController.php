<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Plan;
use App\Riesgo;
use App\Tratamiento;
use App\opcionTratamiento;
use App\AccionesPlan;
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

    public function listar($idRiesgo,$idOpcionTratamiento){

        

        $plan = DB::table('plan')->distinct()
                    ->join('riesgo as r','r.idRiesgo', '=','plan.idRiesgo')
                    ->join('opcion_tratamiento','opcion_tratamiento.idOpcionTratamiento','=','plan.idOpcionTratamiento')
                    ->join('acciones as ac','ac.idRiesgo','=','plan.idRiesgo')
                    ->join('control','control.idControlL','=','ac.idControlL')
                    ->select('r.nombre as riesgo','opcion_tratamiento.nombre as opcion','ac.accion as accion','responsable','ac.duracion as duracion','plan.idPlan','control.nombre','control.descripcion')
                      ->where([['plan.idRiesgo','=',$idRiesgo],['plan.idOpcionTratamiento','=',$idOpcionTratamiento],['ac.idOpcionTratamiento','=',$idOpcionTratamiento]])
                      ->orderBy('idPlan','desc')
                      ->get();

        return view('plan.listar')->with('plan',$plan);

    }

    public function obtenertratamiento($id){
       

        return  opcionTratamiento::select('nombre','idOpcionTratamiento')->get();

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
                        ->where([['controles.idRiesgo',            '=', $idRiesgo],
                                      ['controles.idOpcionTratamiento', '=', $idOpcionTratamiento]
                                    ])
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
        /*$idRiesgo1            = $request->input('idRiesgo');
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
        {*/

            $plan = new Plan();
            $plan->idRiesgo            = $request->input('idRiesgo');
            $plan->idOpcionTratamiento = $request->input('idOpcionTratamiento');
            $plan->responsable         = $request->input('responsable');
           // $plan->idControlL          = $request->input('idControlL');
            $plan->save();

            /*$idRiesgo1            = $request->input('idRiesgo');
            $idOpcionTratamiento1 = $request->input('idOpcionTratamiento');

            $idPlan = DB::table('plan')->distinct()
                             ->select('plan.idPlan')
                             ->where([['plan.idRiesgo',            '=', $idRiesgo1],
                                      ['plan.idOpcionTratamiento', '=', $idOpcionTratamiento1]
                                    ])
                             ->get();

            $array1 = array();

            foreach($idPlan as $t1)
            {
                $array1[] = $t1->idPlan;
            }

            $longitud1 = count($array1);
            

            for($i=0; $i<$longitud1; $i++)
            {
                $idPlan1= $array1[$i];

            }

            $idControlL1 = DB::table('controles')->distinct()
                             ->select('controles.idControlL')
                             ->where([['controles.idRiesgo',            '=', $idRiesgo1],
                                      ['controles.idOpcionTratamiento', '=', $idOpcionTratamiento1]
                                    ])
                             ->get();

            $array = array();
            foreach($idControlL1 as $t)
            {
                $array[] = $t->idControlL;
            }

            $longitud = count($array);

            for($i=0; $i<$longitud; $i++)
            {
                $accionesPlan = new AccionesPlan();
                $accionesPlan->idPlan      = $idPlan1;
                $accionesPlan->idControlL  = $array[$i];
                $accionesPlan->save();

            }*/

        /*}*/
        
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
