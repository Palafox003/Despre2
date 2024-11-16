@extends('layouts.app')

@section('titulo','NUEVA RECETA')

@section('contenido')
    <form action="/recetas" method="post">
        @csrf
        <label for="nombre">Nombre de la Receta</label>
        <input class="form-control" type="text" name="nombre">
        <input class="btn btn-primary" type="submit" value="Guardar">
    </form>
@endsection