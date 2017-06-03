<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackOfficeListagens extends Controller
{
    public function show()
    {
        $caixotes = \App\CaixoteLixo::all();
        
        return view('backoffice.listagens', compact('caixotes'));
    }
}
