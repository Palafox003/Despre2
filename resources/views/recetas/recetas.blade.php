@extends('layouts.app')

@section('titulo','RECETAS')

@section('contenido')
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Receta</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($recetas as $receta)
                      <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$receta->nombre}}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                 Opciones
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="#">Editar</a></li>
                                  <li><a class="dropdown-item" href="#">Eliminar</a></li>
                                  <li><a class="dropdown-item" href="ingredientes/{{$receta->id}}">Agregar Ingrediente</a></li>
                                </ul>
                              </div>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection