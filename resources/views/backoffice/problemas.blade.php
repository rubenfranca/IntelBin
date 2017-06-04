@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <h2><strong>Problemas</strong></h2>
        <hr>
        
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Problema #1</div>
                
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p><strong>Edifício: </strong> Universidade da Madeira</p>
                        <p><strong>Piso: </strong> 2</p>
                        <p><strong>Local: </strong> Sala de Mestrado</p>
                        <p><strong>Hora: </strong> 13:51</p>
                        <p><strong>Funcionário: </strong> Maria Adelaide</p>
                        <p><strong>Descrição: </strong> Mesa riscada com um objecto cortante</p>
                        <p><strong>Status: </strong> Por corrigir</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection