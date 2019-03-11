<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Activo;
use App\User;

class ActivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $activo = Activo::search($request->nombre)->orderBy('idActivo','ASC')->paginate(5);

        return view('activo.index')->with('activo',$activo); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::select('name','id')->pluck('name','id');

        return view('activo.create')->with('user',$user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if($request->hasFile('imagen')){
          $file = $request->file('imagen');
          $name = time().$file->getClientOriginalName();
          $file->move(public_path().'/images/',$name);  
       }
        $activo = new Activo();
        $activo->nombre = $request->input('nombre');
        $activo->codigo = $request->input('codigo');
        $activo->responsable = $request->input('responsable');
        $activo->tipoActivo = $request->input('tipoActivo');
        $activo->idUsuario = $request->input('id');
        $activo->imagen = $name;
        $activo->save();
        $request->session()->flash('mensaje', 'Actvivo Creado Con exito');
        return redirect()->route('activo.index');
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
        $activo = Activo::findOrFail($id);
        return view('activo.edit')->with('activo',$activo);
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
        $activo=Activo::findOrFail($id);
        $activo->codigo =$request->codigo;
        $activo->responsable =$request->responsable;
        $activo->tipoActivo =$request->tipoActivo;
        $activo->save();
        session()->flash('messag',  'Activo '.$activo->nombre. ' ha sido Modificado.');
        return redirect()->route('activo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activo = Activo::findOrFail($id);
        $activo->delete();
        session()->flash('message',  'Usuario '.$activo->nombre. ' ha sido eliminado.');
        return redirect()->route('activo.index');
    }
}
