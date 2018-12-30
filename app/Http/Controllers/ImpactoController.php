<?php

namespace App\Http\Controllers;
use App\Impacto;


use Illuminate\Http\Request;

class ImpactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impacto = Impacto::orderBy('idImpacto','ASC')->paginate(5);
        return view('impacto.index')->with('impacto',$impacto);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('impacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $impacto = new Impacto($request->all());
        $impacto->save();
        $request->session()->flash('mensaje', 'Impacto Creado Con exito');
        return redirect()->route('impacto.index');

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
        $impacto = Impacto::findOrFail($id);
        return view('impacto.edit')->with('impacto',$impacto);
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
        $impacto=Impacto::findOrFail($id);
        $impacto->descripcion =$request->descripcion;
        $impacto->save();
        session()->flash('messag',  'impacto ha sido Modificado.');
        return redirect()->route('impacto.index');
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
