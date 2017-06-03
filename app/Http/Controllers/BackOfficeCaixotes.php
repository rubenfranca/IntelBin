<?php

namespace App\Http\Controllers;

use App\CaixoteLixo;
use App\Local;
use Illuminate\Http\Request;

class BackOfficeCaixotes extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caixotes  = CaixoteLixo::paginate(2);
        return view ('BoCaixote.index', compact('caixotes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $local = Local::all();
        return view('BoCaixote.create', compact('local'));
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
            'descricao' => 'required|max:255',
            'capacidade' => 'required',
            'tipoLixo' => 'required|max:1000',
            ]);


            //guardar os dados 

            $caixote = new CaixoteLixo;

            $caixote -> nome = $request->nome;
            $caixote -> descricao = $request->descricao;
            $caixote -> capacidade = $request->capacidade;
            $caixote -> tipoLixo = $request->tipoLixo;
            $caixote -> local_id = $request->local_id;

            $caixote -> save();

            return redirect ()->route('BoCaixote.index')->with('message','Caixote do lixo adicionado com sucesso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CaixoteLixo  $caixoteLixo
     * @return \Illuminate\Http\Response
     */
    public function show(CaixoteLixo $caixoteLixo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaixoteLixo  $caixoteLixo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $caixote = CaixoteLixo::findOrFail($id);
        $local = Local::all();

        return view('BoCaixote.edit',compact('caixote', 'local'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CaixoteLixo  $caixoteLixo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validação dos dados
            $this->validate($request, [

            'nome' => 'required|max:255',
            'descricao' => 'required|max:255',
            'capacidade' => 'required',
            'level' => 'required',
            'tipoLixo' => 'required|max:1000',
            ]);


            //guardar os dados 

            $caixote = CaixoteLixo::findOrFail($id);

            $caixote -> nome = $request->nome;
            $caixote -> descricao = $request->descricao;
            $caixote -> capacidade = $request->capacidade;
            $caixote -> tipoLixo = $request->tipoLixo;
            $caixote -> local_id = $request->local_id;

            $caixote -> save();

            return redirect ()->route('BoCaixote.index')->with('message','Caixote do lixo editado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CaixoteLixo  $caixoteLixo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $caixote = CaixoteLixo::findOrFail($id);
        $caixote->delete();
        return redirect ()->route('BoCaixote.index')->with('message','Caixote do lixo eliminado com sucesso');
    }
}
