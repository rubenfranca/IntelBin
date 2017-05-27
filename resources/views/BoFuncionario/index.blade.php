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


    <h2>Funcionários</h2>
    <hr>
    <ul class="list-group">
    @foreach($utilizadores as $user)
       <li class="list-group-item">  <a href="#">{{$user->name}}</a> <span class="badge"><a class = " btn btn-danger btn-xs" href="#">Eliminar</a></span>

       </li>

    @endforeach
    </ul>

    <a href="/register" class = " btn btn-primary"> Adicionar novo Funcionário</a>

    <a href="/register" class = " btn btn-info"> Adicionar novo Administrador </a>
              </div>
          {{$utilizadores->links()}}
    </div>
</div>
</div>


@endsection
