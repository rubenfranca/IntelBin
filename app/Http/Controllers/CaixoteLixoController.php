<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CaixoteLixo;

class CaixoteLixoController extends Controller
{
    public function index()
    {
        return view('caixotes');
    }
    
    public function show(Request $request)
    {
        $caixotes = CaixoteLixo::all();
        
        return view('caixotes', compact('caixotes'));
    }
}
