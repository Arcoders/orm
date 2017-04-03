<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <title>ORM</title>
        <style>
            body{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <a href="{{ route('home') }}" class="navbar-brand">Arcoders ORM</a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Curso Eloquent ORM</h1>
                <p>Texto</p>
            </div>
        </div>
        <div class="container">
            @yield("content")
        </div>
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.j"></script>
    </body>
</html>
