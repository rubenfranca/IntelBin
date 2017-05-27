<?php

namespace App\Http\Controllers;

use App\Edificio;
use Illuminate\Http\Request;

class BackOfficeEdificios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $edificios =Edificio::paginate(2);
        return view ('BoEdificio.index', compact('edificios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BoEdificio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validação dos dados
            $this->validate($request, [

            'nome' => 'required|max:255',
            'localidade' => 'required|max:255',
            'numeroPisos' => 'required|before:now',
            'numeroSalas' => 'required|min:0',
            'numeroCorredores' => 'required|max:1000',
            ]);


            //guardar os dados 

            $edificio = new Edificio;

            $edificio -> nome = $request->nome;
            $edificio -> localidade = $request->localidade;
            $edificio -> numeroPisos = $request->numeroPisos;
            $edificio -> numeroSalas = $request->numeroSalas;
            $edificio -> numeroCorredores = $request->numeroCorredores;

             $edificio -> save();

            return redirect ()->route('BoEdificio.index')->with('message','Edifício criado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function show(Edificio $edificio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edificio = Edificio::findOrFail($id);

        return view('BoEdificio.edit',compact('edificio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //guardar os dados 

            $edificio = Edificio::findOrFail($id);

            $edificio -> nome = $request->nome;
            $edificio -> localidade = $request->localidade;
            $edificio -> numeroPisos = $request->numeroPisos;
            $edificio -> numeroSalas = $request->numeroSalas;
            $edificio -> numeroCorredores = $request->numeroCorredores;

             $edificio -> save();

            return redirect ()->route('BoEdificio.index')->with('message','Edifício editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Edificio  $edificio
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $edificio = Edificio::findOrFail($id);
        $edificio->delete();
        return redirect ()->route('BoEdificio.index')->with('message','Edifício eliminado com sucesso');
    }
}
