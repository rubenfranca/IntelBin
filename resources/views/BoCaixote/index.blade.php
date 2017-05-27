@extends('layout')
@section('content')
   <div class="container">
    <div class="row">
          @if(Session::has('message'))
	<div class="alert alert-success">{{Session::get('message')}}</div>
	@endif

  <h2><strong>Lista de Caixotes do Lixo</strong></h2>
  
  <br>
@foreach($caixotes as $caixote)
  <div class="panel-group" id="accordion">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <strong>{{$caixote->nome}}</strong> <div class="col-md-offsets">
          
        </h4>
      </div>

      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<p><strong>Nome: </strong>{{$caixote->nome}}</p> 
        	<p><strong>Capacidade: </strong>{{$caixote->capacidade}}</p>
        	<p><strong>Nivel: </strong>{{$caixote->level}}</p>
        	<p><strong>Tipo de lixo: </strong>{{$caixote->tipoLixo}}</p>
        	
          <p><strong>Descrição: </strong>{{$caixote->descricao}}</p>
          <hr>
          <form class = "" action="{{route('BoCaixote.destroy',$caixote->id)}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{route('BoCaixote.edit', $caixote->id)}}" class="btn btn-warning btn-sm"> Editar </a> |
            <input type="submit" class="btn btn-danger btn-sm" name="name" value="Eliminar">
      </form>

        </div>

        </div>  

      </div>
      @endforeach
    </div>


    <a href="{{route('BoCaixote.create')}}" class = " btn btn-success"> Adicionar novo caixote do lixo</a>


          </div>
          {{$caixotes->links()}}
    </div>
@endsection