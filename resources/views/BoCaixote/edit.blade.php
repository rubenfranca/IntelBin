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
    <h2>Editar caixote do lixo</h2>
    <div class="col-md-9">	
		<form  class = "" action="{{route('BoCaixote.update',$caixote->id)}}" method="post" >
	
	{{csrf_field() }}
 	
	<input name="_method" type="hidden" value ="PATCH">

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="nome" class="form-control" value = "{{$caixote->nome}}">
	</div>

	<div class="form-group">
	<label>Capacidade: </label><br>
	<input type="number" name="capacidade" class="form-control" value = "{{$caixote->capacidade}}" min = "0"><br>
	</div>

	<div class="form-group">
	<label>Nivel de lixo: </label><br>
	<input type="number" name="level" class="form-control" min="0" value = "{{$caixote->level}}" >
	</div>

	<div class="form-group">
	<label>Tipo de lixo: </label><br>
	<input type="text" name="tipoLixo" class="form-control"  value="{{$caixote->tipoLixo}}"><br>
	</div>

	<div class="form-group">
	<label>Descrição: </label><br>
	<input type="text" name="descricao" class="form-control"  value="{{$caixote->descricao}}"><br>
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