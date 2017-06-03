<?php

namespace App\Http\Controllers;

use App\Piso;
use App\Edificio;
use Illuminate\Http\Request;

class BackOfficePisos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piso = Piso::all();
        $edificio = Edificio::all();
        return view('BoPiso.index', compact('piso','edificio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            ]);


            //guardar os dados 

            $piso = new Piso;

            $piso -> nome = $request->nome;
            $piso -> edificio_id = $request->edificio_id;

            $piso -> save();

        return redirect ()->route('BoPiso.index')->with('message','Edifício criado com sucesso');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function show(Piso $piso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function edit(Piso $piso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Piso $piso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Piso  $piso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Piso $piso)
    {
        //
    }
}
