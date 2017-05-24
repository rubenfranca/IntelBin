<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdificiosController extends Controller
{
    public function show($id)
    {
        $edificio_display = \App\Edificio::find($id);
        
        return view('edificios', compact('edificio_display'));
    }
}
