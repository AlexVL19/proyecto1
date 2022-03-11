{{--Para poder heredar la plantilla necesito usar @extends()--}}
@extends('layouts.app')

@section('titulo','Crear registro')

@section('contenido')

{{--Se utiliza el atributo enctype para poder subir archivos--}}
<form action="/curso" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group" >
        <br>
        <h3>Inscripción de curso</h3>
        <br>
        <label for="name">Nombre del curso</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>

      <br>

      <div class="form-group">
        <label for="desc">Descripción del curso</label>
        <input type="text" name="desc" class="form-control" id="desc">
      </div>
      <br>
      <div class="form-group">
        <label for="desc">Cargar imagen del curso</label>
        <br>
        <input type="file" name="image" id="image">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Subir</button>
    </div>
</form>


@endsection
{{--
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Vista de registros</title>
    </head>

    <body>
        {{--Bootstrap requiere un div contenedor para mostrar los elementos centrados y ordenados
        <div class="container">
            <form action="/curso" method="post">
                @csrf
                <div class="form-group">
                    <br>
                    <h3>Inscripción de curso</h3>
                    <br>
                    <label for="name">Nombre del curso</label>
                    <input type="text" name="name" class="form-control" id="name">
                  </div>

                  <br>

                  <div class="form-group">
                    <label for="desc">Descripción del curso</label>
                    <input type="text" name="desc" class="form-control" id="desc">
                  </div>

                  <br>
                  <button type="submit" class="btn btn-success">Subir</button>
            </form>
        </div>
    </body>

</html>
--}}
