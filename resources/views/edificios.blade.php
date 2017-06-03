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
            <div class="panel panel-default">
               <div class="panel-body">
               <form name="form" method="POST">
                Piso: <select class="form-control input-sm" id="piso" name="piso" method="post">
                   <option selected disabled>Selecione um piso da lista</option>
                   @foreach($piso_display as $pisos)
                    <option value="{{$pisos->id}}">{{$pisos->nome}}</option>
                    @endforeach
                </select>
                   </form>
                </div>
                </form>
            </div>
            
            <div class="panel panel-default">
            </div>
    </div>
    </div>
</div>

{{$caixotes_display}}


@endsection