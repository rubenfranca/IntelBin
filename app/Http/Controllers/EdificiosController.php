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
        
        foreach($piso_display as $pisos)
        {
            $caixotes_display = $pisos->caixotes()->get();
        }
        
        return view('edificios', compact('edificio_display', 'piso_display', 'locais_display', 'caixotes_display'));
    }
    
    public function caixotes(Request $request)
    {
        $pisos = \App\Piso::find($request->id);
    }
    
}
