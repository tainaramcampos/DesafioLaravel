
@extends('layouts.welcome')
@section('content')
    <div class="form-group form-horizontal row">
        <label class="control-label" for="media">Média da turma:</label>
        <div>
            <p class="form-control-static" id="media">someone@example.com</p>
        </div>
    </div>

    <form class="form-inline row">
        <div class="form-group">
        <label class="control-label" for="best">Melhor aluno:</label>
            <p class="form-control-static" id="best">someone@example.com</p>
        </div>

        <div class="form-group" >
            <label class="control-label" for="worst">Pior aluno:</label>
                <p class="form-control-static" id="worst">someone@example.com</p>
        </div>
    </form>

    <div class="container">
        <h3>Alunos:</h3>
        <div class="list-group">
            <a href="#" class="list-group-item">First item</a>
            <a href="#" class="list-group-item">Second item</a>
            <a href="#" class="list-group-item">Third item</a>
        </div>
    </div>


@stop