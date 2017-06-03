@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edificio - {{$edificio_display->nome}}</div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($piso_display as $pisos)
            <div class="panel panel-default">
                    <div class="panel-heading">{{$pisos->nome}}</div>

                     <div id="collapse1" class="panel-collapse collapse in">
                        <div class="panel-body">
                            @foreach($locais_display as $locais)
                                @if($locais->piso_id == $pisos->id)
                                   <label for="local" class="col-md-4 control-label">Local: {{$locais->nome}}</label><br><hr>
                                       @foreach($caixotes_display as $caixotes)
                                           @if($caixotes->local_id == $locais->id)
                                                  <p><strong>Id: </strong>{{$caixotes->id}}</p>
                                                  <p><strong>Nome: </strong>{{$caixotes->nome}}</p>
                                                  <p><strong>Capacidade: </strong> {{$caixotes->capacidade}} L</p>
                                                  <p><strong>Nível atual: </strong> {{$caixotes->level}} %</p>
                                                  <p><strong>Tipo de Lixo: </strong> {{$caixotes->tipoLixo}} </p>
                                               <hr>
                                           @endif
                                       @endforeach
                                @endif
                            @endforeach
                        </div>
                    </div>
            
            
            </div>
            @endforeach
    </div>
    </div>
</div>

@endsection