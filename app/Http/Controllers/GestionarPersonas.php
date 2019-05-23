<?php

namespace App\Http\Controllers;
use App\Personas;
use App\Cargos;
use Illuminate\Http\Request;

class GestionarPersonas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Persona = Personas::all();
        $Cargo = Cargos::all();
        return view('personal/listaPersonas', ["Personas" => $Persona, "Cargos" => $Cargo]);
    }

    public function create()  {
        $Cargo = Cargos::all();
        return view('personal/create', ["Cargos" => $Cargo]);        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Persona = new Personas();

        $Persona->ci = $request->input('number');
        $Persona->nombre = $request->input('name');
        $Persona->sexo = $request->input('gender');
        $Persona->fechaNacimiento = $request->input('fnacim');
        $Persona->telefono = $request->input('phone');
        $Persona->direccion = $request->input('textarea');        
        $Persona->id_cargo = $request->input('Cargo');
        $Persona->save();
        //dd($request->all());
        return redirect('listaEmpleados');
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
