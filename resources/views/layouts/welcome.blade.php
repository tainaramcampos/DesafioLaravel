<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Required meta tags -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    </head>
    <body>
        <ul class="nav nav-tabs">
        <li><a href='{!! url('/register'); !!}'>Cadastrar</a></li>
        <li><a href='{!! url('/search'); !!}'>Busca de Alunos</a></li>
        <li><a href='{!! url('/grades'); !!}'>Notas</a></li>
        </ul>
        @yield('content');
    </body>
</html>
