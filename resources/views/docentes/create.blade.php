{{--Para poder heredar la plantilla necesito usar @extends()--}}
@extends('layouts.app')

@section('titulo','Crear docente')

@section('contenido')

{{--Se utiliza el atributo enctype para poder subir archivos--}}
<form action="/docente" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Se implementan las validaciones anteriormente hechas en el controlador--}}

    @if ($errors->any())
        @foreach ($errors->all() as $alert)
            <div class="alert alert-danger mt-4" role="alert">
                <ul>
                    <li>{{$alert}}</li>
                </ul>
            </div>
        @endforeach
    @endif

    {{-- Cuerpo del documento --}}
    <div class="form-group" >
        <br>
        <h3>Inscripción de curso</h3>
        <br>
        <label for="name">Nombre del docente</label>
        <input type="text" name="name" class="form-control" id="name">
      </div>

      <br>

      <div class="form-group">
        <label for="desc">Apellidos del docente</label>
        <input type="text" name="ape" class="form-control" id="ape">
      </div>
      <br>
      <div class="form-group">
        <label for="desc">Foto del docente</label>
        <br>
        <input type="file" name="imagedoc" id="imagedoc">
      </div>
      <br>
      <div class="form-group">
        <label for="desc">Título del docente</label>
        <input type="text" name="title" class="form-control" id="title">
      </div>
      <br>
      <div class="form-group">
        <label for="desc">Curso al que está asociado</label>
        <input type="text" name="asoc" class="form-control" id="asoc">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Subir</button>
    </div>
</form>


@endsection
