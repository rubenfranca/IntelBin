@extends('layout')
@section('content')
   <div class="container">
    <div class="row">
          @if(Session::has('message'))
	<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif

  <h2><strong>Lista de Edificios</strong></h2>
  
  <br>
@foreach($edificios as $edificio)
  <div class="panel-group" id="accordion">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <strong>{{$edificio->nome}}</strong> <div class="col-md-offsets">
          
        </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<p><strong>Nome: </strong>{{$edificio->nome}}</p> 
        	<p><strong>Numero de pisos: </strong>{{$edificio->numeroPisos}}</p>
        	<p><strong>Numero de salas: </strong>{{$edificio->numeroSalas}}</p>
        	<p><strong>Numero de corredores: </strong>{{$edificio->numeroCorredores}}</p>
        	<p><strong>Localidade: </strong>{{$edificio->localidade}}</p>
          <hr>
          <form class = "" action="{{route('BoEdificio.destroy',$edificio->id)}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{route('BoEdificio.edit', $edificio->id)}}" class="btn btn-warning btn-sm"> Editar </a> |
            <input type="submit" class="btn btn-danger btn-sm" name="name" value="Eliminar">
      </form>

        </div>

        </div>

      </div>
      @endforeach
    </div>


    <a href="{{route('BoEdificio.create')}}" class = " btn btn-success"> Adicionar novo edifício</a>


          </div>
          {{$edificios->links()}}
    </div>
@endsection