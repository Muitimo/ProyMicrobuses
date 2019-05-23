<?php

namespace App\Http\Controllers;
use App\Microbuses;
use App\Personas;
use Illuminate\Http\Request;

class GestionarBuses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Microbus = Microbuses::all();
        $Persona = Personas::all();
        return view('Buses/listaBuses', ["Microbuses" => $Microbus, "Personas" => $Persona]);
    }

    public function create()  {
        $Persona = Personas::all();
        return view('Buses/create', ["Personas" => $Persona]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Microbus = new Microbuses();

        $Microbus->interno = $request->input('Interno');
        $Microbus->placa = $request->input('Placa');
        $Microbus->marca = $request->input('Marca');
        $Microbus->modelo = $request->input('Modelo');
        $Microbus->nropasajeros = $request->input('NroPasajeros');       
        $Microbus->id_propietario = $request->input('Propietario');
        $Microbus->save();
        //dd($request->all());
        return redirect('listaBuses');
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
