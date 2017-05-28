@extends('layout')
@section('content')


@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container">
    <div class="row">
    <h2>Editar local</h2>
    <div class="col-md-9">	
		<form  class = "" action="{{route('BoLocal.update',$local->id)}}" method="post" >
	
	{{csrf_field() }}
 	
	<input name="_method" type="hidden" value ="PATCH">

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="nome" class="form-control" value = "{{$local->nome}}">
	</div>

	<div class="form-group">
	<label>Tipo: </label><br>
	<input type="text" name="tipo" class="form-control" value = "{{$local->tipo}}" ><br>
	</div>

	<div class="form-group">
	<label>Piso: </label><br>
	<select name = "piso_id">
	@foreach($piso as $pisos)	
	<option value ="{{$pisos->id}}" > {{$pisos->nome}}</option>
	@endforeach()
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