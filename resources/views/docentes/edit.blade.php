{{--Para poder heredar la plantilla necesito usar @extends()--}}
@extends('layouts.app')

@section('titulo','Editar docente')

@section('contenido')

{{--Se utiliza el atributo enctype para poder subir archivos--}}
<form action="/docente/{{$doc->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    {{-- Cuerpo del documento --}}
    <div class="form-group" >
        <br>
        <h3>Modificación de la información del docente</h3>
        <br>
        <label for="name">Nombre del docente</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$doc->name}}">
      </div>

      <br>

      <div class="form-group">
        <label for="desc">Apellidos del docente</label>
        <input type="text" name="second_name" class="form-control" id="second_name" value="{{$doc->second_name}}">
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
        <input type="text" name="title" class="form-control" id="title" value="{{$doc->title}}">
      </div>
      <br>
      <div class="form-group">
        <label for="desc">Curso al que está asociado</label>
        <input type="text" name="associate" class="form-control" id="associate" value="{{$doc->associate}}">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Editar</button>
    </div>
</form>


@endsection
