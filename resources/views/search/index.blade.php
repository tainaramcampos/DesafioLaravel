
@extends('layouts.welcome')
@section('content')

        <form class="form-inline" action="/action_page.php">
            <div class="form-group">
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
            <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">CPF
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="#">Nome</a></li>
                        <li><a href="#">Matrícula</a></li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
        </form>

@stop