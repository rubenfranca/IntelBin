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
		<form  action="{{route('BoCaixote.store')}}" method="post">
	
	{{csrf_field()}}
 	
 	<h2>Introduzir novo Caixote do lixo</h2>

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="nome" class="form-control">
	</div>

	<div class="form-group">
	<label>Capacidade: </label><br>
	<input type="number" name="capacidade" class="form-control" min="0"><br>
	</div>

	<div class="form-group">
	<label>Nivel de lixo: </label><br>
	<input type="number" name="level" class="form-control" min="0">
	</div>

	<div class="form-group">
	<label>Tipo de lixo: </label><br>
	<input type="text" name="tipoLixo" class="form-control"><br>
	</div>

	<div class="form-group">
	<label>Descrição: </label><br>
	<input type="text" name="descricao" class="form-control"><br>
	</div>

	<div class="form-group">
	<label>Local: </label><br>
	<select name = "local_id">
	@foreach($local as $locais)	
	<option value ="{{$locais->id}}" > {{$locais->nome}}</option>
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