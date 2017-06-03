<?php

namespace App\Http\Controllers;

use App\Recolha;
use App\User;
use App\CaixoteLixo;
use Illuminate\Http\Request;
use DateTime;
use Carbon;

class BackOfficeRecolhas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        $recolhas = Recolha::paginate(5);
        $caixotes = CaixoteLixo::all();
        return view ('BoRecolha.recolhas', compact('recolhas','user','caixotes'));
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
        //validação dos dados
            $this->validate($request, [

            'data' => 'required|max:255',
            ]);


            //guardar os dados 

            $recolha = new Recolha;
            $date1 = new DateTime();
            
            $usableDate = $date1->format('Y-m-d');
            //$hora1 = $date1->format('H:i:s');
 
            $recolha-> data = $usableDate;
            $recolha -> hora = 0;
            $recolha -> estado = $request->estado;
            $recolha -> user_id = $request->user_id;
        
            $recolha -> save();
            
            $caixote = $request->caixotes;
            foreach($caixote as $caixotes)
            {
                $recolha->caixotesLixo()->attach($caixotes);
            }
            

            //

            return redirect ()->route('BoRecolha.index')->with('message','Recolha adicionada com sucesso');
    
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
    public function update($id)
    {
        $recolha = Recolha::findOrFail($id);

        $recolha -> estado = 1;
        $date1 = new DateTime();
        $usableDate = $date1->format('Y-m-d');
        $hora1 = $date1->format('H:i:s');
 
        $recolha-> data = $usableDate;
        $recolha -> hora = $hora1;

        $recolha->save();

    return redirect ()->route('BoRecolha.index')->with('message','Recolha feita com sucesso');
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
