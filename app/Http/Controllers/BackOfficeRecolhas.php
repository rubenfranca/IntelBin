<?php

namespace App\Http\Controllers;

use App\Recolha;
use Illuminate\Http\Request;

class BackOfficeRecolhas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();
        $recolhas = Recolha::paginate(4);
        return view ('BoRecolha.recolhas', compact('recolhas','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recolha  $recolha
     * @return \Illuminate\Http\Response
     */
    public function show(Recolha $recolha)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recolha  $recolha
     * @return \Illuminate\Http\Response
     */
    public function edit(Recolha $recolha)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recolha  $recolha
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recolha = Recolha::findOrFail($id);

        $recolha -> estado = $request->name;
        $recolha->save();

        return redirect ()->route('BoRecolha.recolhas')->with('message','Recolha feita com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recolha  $recolha
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
