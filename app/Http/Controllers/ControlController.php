<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\control;
use DB;
class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $control2 = Control::select('idControlL','idControlL')->pluck('idControlL','idControlL');

        return view('control.index')->with('control2',$control2); 
    }

    public function listcont($idControlL){


     //   $control = Control::search($request->nombre)->orderBy('idControl','ASC')->paginate(5);
     //   $control = Control::select('nombre')->where('idControlL','=',$idControlL)->get();
        $control = DB::table('control')
                      ->select('idControl','idControlL','nombre','descripcion','acciones')
                      ->where('idControlL','=',$idControlL)
                      ->get();
    //    dd($control);
        
        return view('control.listcont')->with('control',$control);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

        return view('control.create')->with('control',$control);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $control = new Control($request->all());
        $control->save();
        $request->session()->flash('mensaje', 'Control Creado Con exito');
        return redirect()->route('control.index');


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
        $control = Control::findOrFail($id);
        return view('control.edit')->with('control',$control);
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
        $control=Control::findOrFail($id);
        $control->acciones =$request->acciones;
        $control->save();
        session()->flash('messag',  'Control Modificado.');
        return redirect()->route('control.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $control = Control::findOrFail($id);
        $control->delete();
        session()->flash('message',  'Control eliminado.');
        return redirect()->route('control.index');
    }
}
