<?php

namespace App\Http\Controllers;
use App\Asistencias;
use App\Personas;
use App\Choferes;
use Illuminate\Http\Request;


class MarcarAsistencia extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listaAsistencia = Asistencias::all();
        $Persona = Personas::all();
        return view('asistencia/planillaDeAsistencias', ["listaAsistencia" => $listaAsistencia, "Personas" => $Persona]);
    }

    public function entrada()  {
        return view('asistencia/marcarEntrada');        
    }

    public function salida()  {
        return view('asistencia/marcarSalida');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeIn(Request $request)
    {
        $marcar = new Asistencias();

        $marcar->fecha = date('Y-m-d');
        $marcar->horaIngreso = date('h:m:s');
        $marcar->id_persona = Personas::where('ci', '=', $request->input('Marca'))->value('id');
        $marcar->save();
        
        
        if ($marcar->id_persona == Choferes::where('id_chofer', '=', $marcar->id_persona)->value('id_chofer')) {
            //dd($chofer);
           return redirect("enlistar/{{$marcar->id_persona}}");            
        }

        return redirect('reporteAsistencias');
    }

    public function storeOut(Request $request)
    {
        $marcar = new Asistencias();
        
        
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
