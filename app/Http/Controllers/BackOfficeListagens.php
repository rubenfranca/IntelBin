<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Charts;
use DB;
use App\Level;
use App\Caixote;
use App\Recolha;

class BackOfficeListagens extends Controller
{
    public function show()
    {
        $caixotes = \App\CaixoteLixo::all();

        $chart = Charts::database(Recolha::all(),'line', 'highcharts')
        //->data(Caixote::all())
            // Setup the chart settings
        //RECOLHAS FEITAS NO DIA / contagem hora
          /*  ->title("Recolhas")
            ->responsive(false)
            ->width(0)
            ->dateColumn('hora')
            ->groupByHour()
            ->elementLabel("Total")
            ->dimensions(800, 300); // Width x Height*/
        //FIM DE RECOLHAS

        //RECOLHAS FEITAS NOS ultimos 30 dias/ contagem diaria 
           ->title("Recolhas")
            ->responsive(false)
            ->width(0)
            ->dateColumn('data')
            ->LastByDay(30)
            ->elementLabel("Total")
            ->dimensions(800, 300);
        
        return view('backoffice.listagens', compact('caixotes'), ['chart' => $chart]);
    }
}
