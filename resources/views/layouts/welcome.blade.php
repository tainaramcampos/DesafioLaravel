<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>

        <link rel="stylesheet" type="text/css" href="css/customstyle.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>

    <div class="container container-fluid">
        <ul class="nav nav-tabs">
            <li><a href='{!! url('/register'); !!}'>Cadastrar</a></li>
            <li><a href='{!! url('/student'); !!}'>Busca de Alunos</a></li>
            <li><a href='{!! url('/grades'); !!}'>Notas</a></li>
        </ul>
        <br>
    </div>
    <div class="container">
    @yield('content')
    </div>
    </body>
</html>
