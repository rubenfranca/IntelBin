@extends('layout')
@section('content')
   <div class="container">
    <div class="row">

 <h2><strong>Lista de Pisos</strong></h2>
  
  <br>
@foreach($piso as $pisos)
  <div class="panel-group" id="accordion">
	<div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <strong>{{$pisos->nome}}</strong> <div class="col-md-offsets">
          
        </h4>
      </div>


      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
        	<p><strong>Nome: </strong>{{$pisos->nome}}</p> 
        	<p><strong>Edifício: </strong> 
        	@foreach($pisos->edificios()->get() as $edifi)
        	{{$edifi->nome}}
        	@endforeach
        	</p>
          <hr>
          <form class = "" action="{{route('BoPiso.destroy',$pisos->id)}}" method="post">
            <input type="hidden" name="_method" value="delete">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <a href="{{route('BoPiso.edit', $pisos->id)}}" class="btn btn-warning btn-sm"> Editar </a> |
            <input type="submit" class="btn btn-danger btn-sm" name="name" value="Eliminar">
      </form>

        	</div>
       </div>
       </div>

        	@endforeach
       </div>
        	



<div class=".col-md-4">
          <form  action="{{route('BoPiso.store')}}" method="post">
	
	{{csrf_field()}}
 	
 	<h2>Adicionar novo Piso</h2>
 	<hr>

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="nome" class="form-control">
	</div>

	<div class="form-group">
	<label>Edificio: </label><br>
	<select name = "edificio_id">
	@foreach($edificio as $edificios)	
	<option value ="{{$edificios->id}}" > {{$edificios->nome}} </option>
	@endforeach
	</select>
	</div>

	<div class="form-group">
	<input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</form>
    </div>
        
    </div>

    </div>


@endsection