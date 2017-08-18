@extends('student.index')
@section('secondcontent')

<style>
    .form-horizontal{
        margin-top: 30px;
    }

</style>

    <div class="container">
        <form class="form-horizontal">

            <div class="form-group col-xs-8">
                <label for="usr" class="control-label col-sm-2" >Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="usr" value="{{$aluno->nome}}" disabled>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="cpf" class="control-label col-sm-2" >CPF</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="cpf" value="Nome" disabled>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="mat" class="control-label col-sm-2" >Matrícula</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="mat" value="Matrícula" disabled="">
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="grade" class="control-label col-sm-2" >Nota</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="grade" value=Nota" disabled>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="str" class="control-label col-sm-2" >Rua</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="str" value="rua" disabled>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="num" class="control-label col-sm-2" >Número</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="num" value="numero" disabled>
                </div>
            </div>

            <div class="form-group col-xs-8">
                <label for="nbr" class="control-label col-sm-2" >Bairro</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="nbr" value="Bairro" disabled>
                </div>
            </div>

            <div class="form-group">
            <div class="col-sm-offset-8 col-sm-10">
                <button type="submit" class="btn btn-default">Editar</button> <!--Os valores mostrados serão informações do aluno buscado.
                                                                                      Clicar em editar vai habilitar os campos e
                                                                                      mudar o valor do botão "editar" para "Salvar"-->
                <button type="submit" class="btn btn-default">Excluir</button>
            </div>
        </form>
        </form>
    </div>



@stop
