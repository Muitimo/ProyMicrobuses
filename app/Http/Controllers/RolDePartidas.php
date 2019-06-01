<?php

namespace App\Http\Controllers;
use App\Turnos;
use App\Choferes;
use App\Personas;
use Illuminate\Http\Request;


class RolDePartidas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaTurno = Turnos::all();
        $Persona = Personas::all();
        return view('turnos/rolDePartidas', ["listaTurnos" => $listaTurno, "Personas" => $Persona]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id)
    {
        $rolDePartida = new Turnos();
        $idf = (int)substr($id, 1, count($id)-2);
        $chof = Choferes::findOrFail(Choferes::where('id_chofer', '=', $idf)->value('id'));

        $rolDePartida->fecha = date('Y-m-d');
        $rolDePartida->id_interno = $chof->id_interno;
        $rolDePartida->id_chofer = $chof->id_chofer;
        $rolDePartida->save();
        
        //dd($rolDePartida);
        return redirect('reporteAsistencias');
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
