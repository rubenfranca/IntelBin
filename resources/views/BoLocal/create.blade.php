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
    <div class="col-md-9">	
		<form  action="{{route('BoLocal.store')}}" method="post">
	
	{{csrf_field()}}
 	
 	<h2>Introduzir novo Local</h2>

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="nome" class="form-control">
	</div>

	<div class="form-group">
	<label>Tipo: </label><br>
	<input type="text" name="tipo" class="form-control"><br>
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