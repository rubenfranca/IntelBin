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

    <h2>Funcionários</h2>
    <hr>

    <table  class="table table-striped">
    <thead>
      <tr>
      
        <th>Nome</th>
        <th>Funcção</th>
        <th></th>

      </tr>
      
    </thead>

    <tbody>

      @foreach($utilizadores as $user)
        <tr>
        <div class="top-margin">
        <td>
            {{$user->name}}

        </td>
      @foreach($user->tipos()->get() as $tipo)
        <td>
        
            {{$tipo->nome}}
        
        </td>
@endforeach
        <td>
          

        </td>
        @endforeach
    </tbody>

    </table>
   

    <a href="/register" class = " btn btn-primary"> Adicionar novo Funcionário</a>

    <a href="/register" class = " btn btn-info"> Adicionar novo Administrador </a>
              </div>
          {{$utilizadores->links()}}
    </div>
</div>
</div>


@endsection
