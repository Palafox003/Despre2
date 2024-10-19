@extends('layouts.app')
    @section('titulo','Agregar Prodcuto')
    @section('contenido')
        <h1>EDITAR PRODUCTO</h1>
        
        <form action="/productos/{{$producto->id}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" value="{{$producto->nombre}}" name="nombre" class="form-control" id="nombre">
            </div>
            <div class="mb-3">
                <label for="marca" class="form-label">Marca</label>
                <input type="text" value="{{$producto->marca}}" name="marca" class="form-control" id="marca">
            </div>
            <div class="mb-3">
                <label for="presentacion" class="form-label">Presentación</label>
                <input type="text" value="{{$producto->presentacion}}" name="presentacion" class="form-control" id="presentacion">
            </div>
            <div class="mb-3">
                <label for="cantidad" class="form-label">Cantidad</label>
                <input type="number" value="{{$producto->cantidad}}" name="cantidad" class="form-control" id="cantidad">
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar">
        </form>
    @endsection