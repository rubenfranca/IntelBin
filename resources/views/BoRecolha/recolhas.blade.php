@extends('layout')
@section('content')
   <div class="container">
    <div class="row">

             <h2>Recolhas</h2>
             <hr>

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
            		<input type="hidden" name="_method" value="update">
            		<input type="hidden" name="_token" value="{{ csrf_token() }}">
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
    </div>

@endsection