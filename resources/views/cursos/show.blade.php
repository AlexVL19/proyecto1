 @extends('layouts.app')

@section('titulo', 'Detalles')

@section('contenido')
    <div class="container mt-3 mb-5">
        <h3 class="text-center">Curso de {{$cursito->name}}</h3>
    </div>

    <div class="container mt-2 mb-3 text-center">
        <img style="height: 470px; width: 420px; margin: 20px; border-radius: 8px" class="rounded mx-auto d-block" src="{{ Storage::url($cursito->imagen) }}">
        <p class="text-center">{{$cursito->desc}}</p>
        <p class="text-center">Curso creado en {{$cursito->created_at}}</p>
        <a href="/curso/{{$cursito->id}}/edit" class="btn btn-dark">Editar curso</a>
<br>
<br>
        <form class="form-group" action="/curso/{{$cursito->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar curso</button>
        </form>
    </div>
@endsection
