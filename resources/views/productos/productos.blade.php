@extends('layouts.app')
@section('titulo','Lista de Productos')
@section('contenido')
    <h1>Lista de Productos</h1>
    
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
                <td></td>
            </tr>
        @endforeach
    </table>
@endsection