
@extends('layouts.welcome')
@section('content')

    <script>

        $(document).ready(function () {
            $("#supplier").change(function () {
                var selectedText2 =  $("#supplier option:selected").text();
                $('[name="tipodebusca"]').val(selectedText2);
            });
        });

    </script>

        <form class="form-inline" method="get" action="{{action('SearchController@find')}}">

            <div class="col-md-4">
            <div class="form-group">
            <input type="text" class="form-control" name="dadodebusca" required>
            </div>
            <div class="form-group">
                <select name="supplier" id="supplier" style="text-transform:uppercase;">
                    <option value="">CPF</option>
                    <option value="1">Nome</option>
                    <option value="2">Matrícula</option>
                </select>
                </br>
                <input name="tipodebusca" id="textvalue" value="CPF" hidden readonly>
            </div>
            </div>


            <div class="container col-md-4">
            <button type="submit" class="btn btn-default">Buscar</button>
            </div>
        </form>
        <div class="content">
        @yield('secondcontent')
         </div>
@stop