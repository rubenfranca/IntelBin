@extends('layout')
@section('content')
   <div class="container">
    <div class="row">

    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

             <h2><strong>Recolhas</strong></h2>
             <hr>

 <div class=".col-md-8"> 

<table  class="table table-striped">
		<thead>
			<tr>
			
				<th>Data</th>
				<th>Hora</th>
				<th>Estado</th>
				<th>Feita por:</th>

			</tr>
			
		</thead>

		<tbody>
				@foreach($recolhas as $recolha)
				<tr>
				<div class="top-margin">
				<td>
						{{$recolha->data}}

                </td>

                <td>
                	
                	{{$recolha->hora}}
                </td>

                @if($recolha->estado == '1')
                <td>
                	Recolha feita
				</td>
                @else
               <td>
					<form class = "" action="{{route('BoRecolha.update',$recolha->id)}}" method="post">
            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
            		<input name="_method" type="hidden" value ="PATCH">
            		<input type="submit" class="btn btn-success btn-sm" name="name" value="Fazer recolha">
     			 </form>
				</td>
				@endif
                
                @foreach($recolha->utilizador()->get() as $users)
				<td>
					{{$users->name}}

				</td>
				@endforeach

                @endforeach

            </div>
            </tr>
            </tbody>
            </table>
        </div>
          {{$recolhas->links()}}
  


<div class=".col-md-4">
          <form  action="{{route('BoRecolha.store')}}" method="post">
	
	{{csrf_field()}}
 	
 	<h2>Nova recolha</h2>
 	<hr>

	<div class="form-group">
	<label>Data: </label><br>
	<input type="date" name="data" class="form-control">
	</div>
<!--
	<div class="form-group">
	<label>Hora: </label><br>
	<input type="text" name="hora" class="form-control"><br>
	</div>
-->
	<input id="hora" type="hidden" class="form-control" name="estado" value= 0 required>
	<input id="estado" type="hidden" class="form-control" name="estado" value= 2 required>

	<div class="form-group">
	<label>Funcionário: </label><br>
	<select name = "user_id">
	@foreach($user as $utilizador)	
	<option value ="{{$utilizador->id}}" > {{$utilizador->name}} </option>
	@endforeach
	</select>
	</div>
	
	<div class="form-group">
	    <label>Caixote: </label><br>
	        @foreach($caixotes as $caixote)
	            <input type="checkbox" name="caixotes[]" value="{{$caixote->id}}">{{$caixote->nome}} <br>
	        @endforeach
	</div>

	<div class="form-group">
	<input type="submit" class="btn btn-success" value="Guardar">
	</div>
	</form>
    </div>
        
    </div>

    </div>


@endsection