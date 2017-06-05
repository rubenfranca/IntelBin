@extends('layout')
@section('content')
<div class="container">
    <div class="row">
       <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Problemas</div>
            </div>
        </div>
        <hr>
        
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
           @foreach($problemas as $problema)
            <div class="panel panel-default">
                <div class="panel-heading">Problema - {{$problema->id}}</div>
                
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p><strong>Edifício: </strong> Universidade da Madeira</p>
                        <p><strong>Piso: </strong> 2</p>
                        <p><strong>Local: </strong> Sala MEI</p>
                        <p><strong>Hora: </strong> {{$problema->data}}</p>
                        <p><strong>Funcionário: </strong> 
                        @foreach($user as $users)
                            @if($users->id == $problema->id_funcionario)
                                {{$users->name}}
                            @endif
                        @endforeach</p>
                        <p><strong>Descrição: </strong> {{$problema->descricao}}</p>
                        <p><strong>Status: </strong> 
                        @if($problema->estado == 1)
                            Por corrigir
                            <form class="" action="{{route('BoProblema.update', $problema->id)}}" method="post">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input name="_method" type="hidden" value ="PATCH">
                                <input type="submit" class="btn btn-success btn-sm" name="name" value="Corrigido">
                            </form>
                        @else
                            Corrigido
                        @endif
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection