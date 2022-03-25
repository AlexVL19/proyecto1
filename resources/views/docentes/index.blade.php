@extends('layouts.app')

@section('titulo', 'Listado de docentes')

@section('contenido')

    <div class="container mt-3 mb-5">
    <h3 class="text-center">Listado de docentes</h3>
    </div>

    {{--Ciclo o bucle especial para trabajar con arreglos--}}
    <div class="row">
        @foreach ($doc as $owo)
        {{--Para llamar información de php, basta con interpolar las variables usando la doble llave--}}
            <div class="col">
                <div class="card text-center mt-3" style="width: 18rem;" >
                    <img style="height: 300px; width: 286px; margin: 20px;" class="card-img-top mx-auto d-block" src="{{ Storage::url($owo->imagen_docente) }}" alt="Foto del docente">
                    <div class="card-body">
                      <h5 class="card-title">{{$owo->name}} {{$owo->second_name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$owo->title}}</li>
                    </ul>
                    {{--Se requiere del ID para acceder a un registro en particular--}}
                    <a href="/docente/{{$owo->id}}" class="btn btn-dark">Ver más</a>
                  </div>
            </div>
    @endforeach
    </div>
@endsection
