
@extends('layouts.welcome')
@section('content')
    <div class="form-group form-horizontal row">
        <label class="control-label" for="media">Média da turma:</label>
        <div>
            <p class="form-control-static" id="media">{{$media}}</p>
        </div>
    </div>

    <form class="form-inline row">
        <div class="form-group">
        <label class="control-label" for="best">Melhor aluno:</label>
            <p class="form-control-static" id="best">{{$melhoraluno}}</p>
        </div>

        <div class="form-group" >
            <label class="control-label" for="worst">Pior aluno: </label>
                <p class="form-control-static" id="worst">{{$pioraluno}}</p>
        </div>
    </form>

    <div class="container">
        <h3>Alunos:</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Nota</th>
            </tr>
            </thead>
            <tbody>

            @foreach($alunos as $aluno)
                @foreach($notas as $nota)
                    <tr>
                        <td>{{$aluno->nome}}</td>
                        <td>{{$nota->valor}}</td>
                        @endforeach
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>




@stop