<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\control;

class ControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $control = Control::orderBy('idControl','ASC')->paginate(5);

        return view('control.index')->with('control',$control); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('control.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $control = new Control($request->all());
        $control->save();

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
        $control->descripcion =$request->descripcion;
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
