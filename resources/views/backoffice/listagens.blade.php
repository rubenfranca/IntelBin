@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <h2><strong>Listagem de medições</strong></h2>
        <hr>
        
        <div class=".col-md-8">
            @foreach($caixotes as $caixote)
                <h3><strong>{{$caixote->nome}}</strong></h3>
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nível</th>
                            <th>Data</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($caixote->levels()->get() as $recolhas)
                        <tr>
                        <td>{{$recolhas->id}}</td>
                        <td>{{$recolhas->level}}</td>
                        <td>{{$recolhas->data}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
            @endforeach
        </div>
        
    </div>
</div>

@endsection