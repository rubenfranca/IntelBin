@extends('layout')
@section('content')
   <div class="container">
    <div class="row">
          @if(Session::has('message'))
	<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif

  <h2><strong>Lista de Locais</strong></h2>
  
  <br>
@foreach($locais as $local)
  <div class="panel-group" id="accordion">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <strong>{{$local->nome}}</strong> <div class="col-md-offsets">
          
        </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<p><strong>Nome: </strong>{{$local->nome}}</p> 
        	<p><strong>Tipo: </strong>{{$local->tipo}}</p>

        	<p><strong>Piso: </strong>

          @foreach($local->pisos()->get() as $piso)
          {{$piso->nome}}</p>
          @endforeach
          <hr>
          <form class = "" action="{{route('BoLocal.destroy',$local->id)}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{route('BoLocal.edit', $local->id)}}" class="btn btn-warning btn-sm"> Editar </a> |
            <input type="submit" class="btn btn-danger btn-sm" name="name" value="Eliminar">
      </form>

        </div>

        </div>

      </div>
      @endforeach
    </div>


    <a href="{{route('BoLocal.create')}}" class = " btn btn-success"> Adicionar novo edifício</a>


          </div>
          {{$locais->links()}}
    </div>
@endsection