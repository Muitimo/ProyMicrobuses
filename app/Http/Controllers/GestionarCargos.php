<?php

namespace App\Http\Controllers;
use App\Cargos;
use Illuminate\Http\Request;

class GestionarCargos extends Controller
{
    
    public function index()
    {
        $Cargo = Cargos::all();
        return view('cargos/listaCargos', ["Cargos" => $Cargo]);
    }

    public function create()  {
        $m = count(Cargos::all());
        return view('cargos/create', ["n"=>$m]);        
    }

    public function store(Request $request)
    {
        $Cargo = new Cargos();

        $Cargo->nombre = $request->input('name');
        $Cargo->descripcion = $request->input('textarea');
        $Cargo->save();
        //dd($request->all());
        return redirect('listaCargo');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $cargo = Cargos::findOrFail($id);
        //dd($cargo);
        $cargo->delete();
        return redirect('listaCargo');
    }
}
