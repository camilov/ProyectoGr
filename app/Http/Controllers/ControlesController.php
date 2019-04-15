<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controles;
use App\Control;
use App\Acciones;
use DB;
use App\Http\Requests\ControlesRequest;


class ControlesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     *
     */
    public function index($idRiesgo)
    {
        
        $controles = DB::table('controles')->distinct()
                        ->join('control','control.idControlL','=','controles.idControlL')
                        ->join('acciones','acciones.idControlL','=','controles.idControlL')
                        ->select('control.nombre as nombre','acciones.accion as accion','controles.idRiesgo as idRiesgo','controles.idOpcionTratamiento as idOpcionTratamiento')
                        ->where('controles.idRiesgo','=',$idRiesgo)
                        ->get();

        return view('controles.index')->with('controles',$controles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idRiesgo,$idOpcionTratamiento)
    {
       
        $control = Control::select('nombre','idControl')->pluck('nombre','idControl');


        return view('controles.create')->with('control',$control)->with('idRiesgo',$idRiesgo)->with('idOpcionTratamiento',$idOpcionTratamiento);
    }

    
    public function acciones($id){
       
        return  Control::select('acciones')->where('idControlL','=',$id)->get();

    }
    
    public function sacarid($id){

        return Control::select('idControlL')->where('idControl','=',$id)->get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $acciones = new Acciones();
        $acciones->idControlL = $request->input('idControlL');
        $acciones->accion = $request->input('accion');
        $acciones->save();

        $controles = new Controles();   
        $controles->idControl = $request->input('idControl');
        $controles->idRiesgo = $request->input('idRiesgo');   
        $controles->idOpcionTratamiento = $request->input('idOpcionTratamiento');
        $controles->idControlL = $request->input('idControlL');
        $controles->save();

        $idRiesgo = $request->input('idRiesgo'); ;
       // dd($request->input('idRiesgo'));
        return redirect()->route('controles.index',[$idRiesgo]);
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
