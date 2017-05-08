@extends('layout')
@section('content')
   <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Piso</div>
                <select class="form-control input-sm" id="piso" name="piso">
                    <option value="#">Piso 1</option>
                    <option value="#">Piso 2</option>
                </select>
            </div>
            
            @foreach($caixotes as $caixotes)
            <div class="panel panel-default">
                <div class="panel-heading">Caixote {{$caixotes->id}}</div>
                <div class="panel-body">
                    Nome: {{$caixotes->nome}}
                </div>
                <div class="panel-body">
                    Descrição: {{$caixotes->descricao}}
                </div>
                <div class="panel-body">
                    Capacidade: {{$caixotes->capacidade}}
                </div>
                <div class="panel-body">
                    Tipo de Lixo: {{$caixotes->tipoLixo}}
                </div>
                <div class="panel-body">
                    Local: {{$caixotes->id_local}}
                </div>
            </div>
            @endforeach
        </div>
        
    </div>
    </div>
@endsection