<!-- resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>@yield('titulo')</title>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    </head>
    <body>
        {{--Al llamar un elemento por su nombre desde otra página podremos implementar la plantilla--}}
        {{--@section('barlateral')
            This is the master sidebar.
        @show--}}

        {{--Este container no se debe cambiar--}}
        <nav class="navbar navbar-expand navbar-dark bg-dark">
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="/curso">Cursos</a>
                <a class="nav-item nav-link" href="/curso">Inicio</a>
            </div>
        </nav>
        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>
