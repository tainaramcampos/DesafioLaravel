
@extends('layouts.welcome')
@section('content')

    <div class="container">
        <form class="form-horizontal" action="/action_page.php">

            <div class="form-group col-xs-8">
                <label for="usr" class="control-label col-sm-2" >Nome</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="usr">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="cpf" class="control-label col-sm-2" >CPF</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="cpf">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="mat" class="control-label col-sm-2" >Matrícula</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="mat">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="grade" class="control-label col-sm-2" >Nota</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="grade">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="str" class="control-label col-sm-2" >Rua</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="str">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="num" class="control-label col-sm-2" >Número</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="num">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="nbr" class="control-label col-sm-2" >Bairro</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="nbr">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-8 col-sm-10">
                    <button type="submit" class="btn btn-default">Salvar</button>
                </div>
            </div>
        </form>
    </div>

@stop