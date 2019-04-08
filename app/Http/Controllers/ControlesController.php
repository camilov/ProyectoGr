<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Controles;
use App\Control;
use DB;
use App\Http\Requests\ControlesRequest;


class ControlesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     *
     */
    public function index()
    {
        
        $controles = Controles::orderBy('idControles','ASC')->paginate(5);
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
    public function store(ControlesRequest $request)
    {
       
        $controles = new Controles($request->all());
        dd($controles);
        $controles->save();

        return redirect()->route('controles.index');
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
