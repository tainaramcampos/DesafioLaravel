
@extends('layouts.welcome')
@section('content')

    <div class="container">
        <form class="form-horizontal" method="post" action="{{action('RegisterController@save')}}">
            {!! csrf_field() !!}
            <div class="form-group col-xs-8">
                <label for="usr" class="control-label col-sm-2" >Nome</label>
                <div class="col-sm-10">
                <input type="text" name="nome" class="form-control" id="usr" maxlength=255 required>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="cpf" class="control-label col-sm-2">CPF</label>
                <div class="col-sm-10">
                <input type="text" name="cpf" class="form-control" id="cpf"  maxlength=11 required>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="mat" class="control-label col-sm-2">Matrícula</label>
                <div class="col-sm-10">
                <input type="text" name="matricula" class="form-control" id="mat" maxlength=10 required>
                </div>
            </div>

            <div class="form-group col-xs-8 input-table" id="grade">
                <label for="grade" class="control-label col-sm-2" >Nota</label>
                <table class="table table-bordered table-condensed" >
                    <tbody>
                    <tr>
                        <td  class="col-sm-10"><input type="number" name="valor1" class="form-control col-sm-2" required/></td>
                    </tr>
                    <tr>
                        <td  class="col-sm-10"><input type="number" name="valor2" class="form-control col-sm-2" required/></td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="form-group col-xs-8">
                <label for="str" class="control-label col-sm-2" >Rua</label>
                <div class="col-sm-10">
                <input type="text" name="logradouro" class="form-control" maxlength="255" id="str" required>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="num" class="control-label col-sm-2" >Número</label>
                <div class="col-sm-10">
                <input type="text" name="numero" class="form-control" id="num" maxlength="45" required>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="nbr" class="control-label col-sm-2" >Bairro</label>
                <div class="col-sm-10">
                <input type="text" name="bairro" class="form-control" id="nbr" maxlength="255" required>
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