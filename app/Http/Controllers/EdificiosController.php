<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdificiosController extends Controller
{
    public function show($id)
    {
        $edificio_display = \App\Edificio::find($id);
        $piso_display = $edificio_display->pisos()->get();
        $locais_display = $edificio_display->locais()->get();
        
        $caixotes_display = \App\CaixoteLixo::all();
        
        $teste = $edificio_display->caixotes();
        
        
        return view('edificios', compact('edificio_display', 'piso_display', 'locais_display', 'caixotes_display', 'teste'));
    }
    
    public function caixotes(Request $request)
    {
        $pisos = \App\Piso::find($request->id);
    }
    
}
