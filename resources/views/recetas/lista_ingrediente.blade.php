@extends('layouts.app')

@section('titulo','LISTA INGREDIENTE')

@section('contenido')
    <div class="row">
        <div class="col">
            <h3>Ingredientes para crear {{$receta->nombre}}</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ingrediente</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Presentación</th>
                    <th>
                       
                    </th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($ingredientes as $ingrediente)
                      <tr>
                        <th scope="row">{{$loop->index+1}}</th>
                        <td>{{$ingrediente->nombre}}</td>
                        <td>{{$ingrediente->marca}}</td>
                        <td>{{$ingrediente->presentacion}}</td>
                        <td>
                            <form action="/agregar/ingrediente" method="post">
                                @csrf
                                <input type="hidden" name="receta_id" value="{{$receta->id}}">
                                <input type="hidden" name="ingrediente_id" value="{{$ingrediente->id}}">
                                <input class="btn btn-primary" type="submit" value="Agregar">
                            </form>
                        </td>
                      </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection