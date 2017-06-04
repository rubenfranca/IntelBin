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
    <h2>Editar Piso</h2>
    <div class="col-md-9">	
	<form  class = "" action="{{route('BoPiso.update',$piso->id)}}" method="post" >
	
	{{csrf_field() }}
 	
	<input name="_method" type="hidden" value ="PATCH">

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="nome" class="form-control" value = "{{$piso->nome}}">
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