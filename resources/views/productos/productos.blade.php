@extends('layouts.app')
@section('titulo','Lista de Productos')
@section('contenido')
    <h1>Lista de Productos</h1>
    
    <form action="/productos/buscar" method="post">
        @csrf
        <input class="form-control" type="text" name="buscar" placeholder="Buscar">
        <input class="btn btn-primary" type="submit" value="Buscar">
    </form>
    
    <table class="table">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Presentación</th>
            <th>Cantidad</th>
            <th></th>
        </tr>
        @foreach($productos as $producto)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->marca}}</td>
                <td>{{$producto->presentacion}}</td>
                <td>{{$producto->cantidad}}</td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Opciones
                        </button>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="/productos/{{$producto->id}}/edit">Actualizar</a></li>
                          <li>
                            <form action="/productos/{{$producto->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-danger" type="submit" value="Eliminar">
                            </form>
                          </li>
                        </ul>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
@endsection