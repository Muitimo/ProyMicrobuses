<?php

namespace App\Http\Controllers;
use App\Choferes;
use App\Microbuses;
use App\Personas;
use Illuminate\Http\Request;

class Asignaciones_Bus_Chofer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Microbus = Microbuses::all();
        $Chofer_Bus = Choferes::all();
        $Persona = Personas::all();
        return view('Buses/Buses_Choferes', ["Microbuses" => $Microbus, "Personas" => $Persona, "Ch_Bs" => $Chofer_Bus]);
    }

    public function create()  {
        $Microbus = Microbuses::all();
        $Persona = Personas::all();
        return view('Buses/AsignarChofer', ["Microbuses" => $Microbus, "Personas" => $Persona]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $Chofer_Bus = new Choferes();

        $Chofer_Bus->fechaInicio = $request->input('Inicio');
        $Chofer_Bus->fechaFin = $request->input('fin');
        $Chofer_Bus->id_chofer = $request->input('chofer');
        $Chofer_Bus->id_interno = $request->input('interno');
        $Chofer_Bus->save();
        //dd($request->all());
        return redirect('listaAsignacines');
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
