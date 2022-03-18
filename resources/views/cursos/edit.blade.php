@extends('layouts.app')

@section('titulo', 'Editar curso')

@section('contenido')
<form action="/curso/{{$cursito->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="form-group" >
        <br>
        <h3>Modificación de curso</h3>
        <br>
        <label for="name">Nombre del curso</label>
        <input type="text" name="name" class="form-control" id="name" value="{{$cursito->name}}">
      </div>

      <br>

      <div class="form-group">
        <label for="desc">Descripción del curso</label>
        <input type="text" name="desc" class="form-control" id="desc" value="{{$cursito->desc}}">
      </div>
      <br>
      <div class="form-group">
        <label for="desc">Cambiar imagen del curso</label>
        <br>
        <input type="file" name="image" id="image">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Modificar</button>
    </div>
</form>
@endsection
