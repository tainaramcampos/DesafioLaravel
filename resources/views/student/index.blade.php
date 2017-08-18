
@extends('layouts.welcome')
@section('content')

    <script>
        $(function(){

            $(".dropdown-menu").on('click', 'li a', function(){
                $(".btn:first-child").text($(this).text() ) ;
                $(".btn:first-child").val($(this).text());
            });

        });
    </script>

        <form class="form-inline" method="get" action="">
            <div class="form-group">
            <input type="text" class="form-control" name="dadodebusca" required>
            </div>
            <div class="form-group">
            <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">CPF
                        <span class="caret"></span></button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li value="cpf"><a href="#">CPF</a></li>
                        <li value="nome"><a href="#">Nome</a></li>
                        <li value="matricula"><a href="#">Matrícula</a></li>
                    </ul>
                </div>
            </div>
            <button type="submit" class="btn btn-default">Buscar</button>
            </div>
            </div>
        </form>
        <div class="content">
        @yield('secondcontent')
         </div>
@stop