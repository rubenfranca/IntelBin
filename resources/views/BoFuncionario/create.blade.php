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
		<form  action="{{route('BoFuncionario.store')}}" method="post">
	
	{{csrf_field()}}
 	
 	<h2>Adicionar novo funcionário</h2>

	<div class="form-group">
	<label>Nome: </label><br>
	<input type="text" name="name" class="form-control">
	</div>

	<div class="form-group">
	<label>Email: </label><br>
	<input type="email" name="email" class="form-control"><br>
	</div>

	<div class="form-group">
	<label>Numero de pisos: </label><br>
	<input type="number" name="numeroPisos" class="form-control" min="0">
	</div>

	<div class="form-group">
	<label>Numero de Salas: </label><br>
	<input type="number" name="numeroSalas" class="form-control" min="0"><br>
	</div>

	<div class="form-group">
	<label>Numero de corredores: </label><br>
	<input type="number" name="numeroCorredores" class="form-control" min="0"><br>
	</div>


	<div class="form-group">
	<input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</form>


</div>

    </div>
    </div>

    @endsection