<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tratamiento;
use App\Riesgo;
use App\opcionTratamiento;
use App\Http\Requests\TratamientoRequest;
use DB;




class TratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idOpcionTratamiento)
    {
        $tratamiento = DB::table('tratamiento')
                            ->join('riesgo','riesgo.idRiesgo','=','tratamiento.idRiesgo')
                            ->join('opcion_tratamiento','opcion_tratamiento.idOpcionTratamiento','=','tratamiento.idOpcionTratamiento')
                            ->select('riesgo.nombre as riesgo','opcion_tratamiento.nombre as opcion_tratamiento','tratamiento.idRiesgo','tratamiento.idOpcionTratamiento')
                            ->where('tratamiento.idOpcionTratamiento','=',$idOpcionTratamiento)
                            ->get();
                            //ratamiento::orderBy('idTratamiento','ASC')->paginate(5);
        return view('tratamiento.index')->with('tratamiento',$tratamiento);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idRiesgo)
    {
        $opcion = opcionTratamiento::select('nombre','idOpcionTratamiento')->pluck('nombre','idOpcionTratamiento');
        return view('tratamiento.create')->with('opcion',$opcion)->with('idRiesgo',$idRiesgo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TratamientoRequest $request)
    {

        $tratamiento = new Tratamiento();
        $tratamiento->idOpcionTratamiento = $request->input('idOpcionTratamiento');
        $tratamiento->idRiesgo            = $request->input('idRiesgo');
        $tratamiento->save();

        $idOpcionTratamiento = $request->input('idOpcionTratamiento');
        return redirect()->route('tratamiento.index',[$idOpcionTratamiento]);
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
