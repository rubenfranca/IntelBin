<?php

namespace App\Http\Controllers;

use App\Local;
use App\Piso;
use Illuminate\Http\Request;

class BackOfficeLocais extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $locais = Local::paginate(4);
        return view ('BoLocal.index', compact('locais'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $piso = Piso::all();
        return view('BoLocal.create', compact('piso'));
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
            'tipo' => 'required|max:255',
            ]);


            //guardar os dados 

            $local = new Local;

            $local-> nome = $request->nome;
            $local -> tipo = $request->tipo;
            $local -> piso_id = $request->piso_id;

            $local -> save();

            return redirect ()->route('BoLocal.index')->with('message','Local adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $local = Local::findOrFail($id);
        $piso = Piso::all();

        return view('BoLocal.edit',compact('piso', 'local'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validação dos dados
            $this->validate($request, [

            'nome' => 'required|max:255',
            'tipo' => 'required|max:255',
            ]);


            //guardar os dados 

            $local = Local::findOrFail($id);

            $local-> nome = $request->nome;
            $local -> tipo = $request->tipo;
            $local -> piso_id = $request->piso_id;

            $local -> save();

            return redirect ()->route('BoLocal.index')->with('message','Local editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::findOrFail($id);
        $local->delete();
        return redirect ()->route('BoLocal.index')->with('message','Local eliminado com sucesso');
    }
}
