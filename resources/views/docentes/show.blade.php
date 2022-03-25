@extends('layouts.app')

@section('titulo', 'Detalles')

@section('contenido')
    <div class="container mt-3 mb-5">
        <h3 class="text-center">{{$doc->name}} {{$doc->second_name}}</h3>
    </div>

    <div class="container mt-2 mb-3 text-center">
        <img style="height: 470px; width: 420px; margin: 20px; border-radius: 8px" class="rounded mx-auto d-block" src="{{ Storage::url($doc->imagen_docente) }}">
        <p class="text-center">{{$doc->title}}</p>
        <p class="text-center">Asociado en el área de {{$doc->associate}}</p>
        <p class="text-center">Usuario creado en {{$doc->created_at}}</p>
        <a href="/docente/{{$doc->id}}/edit" class="btn btn-dark">Editar curso</a>
    </div>
@endsection
