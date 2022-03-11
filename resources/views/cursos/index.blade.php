@extends('layouts.app')

@section('titulo', 'Listado de cursos')

@section('contenido')

    <div class="container mt-3 mb-5">
    <h3 class="text-center">Listado de cursos disponibles</h3>
    </div>

    {{--Ciclo o bucle especial para trabajar con arreglos--}}
    <div class="row">
    @foreach ($cursito as $uwu)
        {{--Para llamar información de php, basta con interpolar las variables usando la doble llave--}}
            <div class="col">
                <div class="card text-center mt-3" style="width: 18rem;" >
                    <img style="height: 300px; width: 286px; margin: 20px;" class="card-img-top mx-auto d-block" src="{{ Storage::url($uwu->imagen) }}" alt="Imagen del curso">
                    <div class="card-body">
                      <h5 class="card-title">{{$uwu->name}}</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">{{$uwu->desc}}</li>
                    </ul>
                    <a href="#" class="btn btn-dark">Ver más</a>
                  </div>
            </div>
    @endforeach
    </div>
@endsection
