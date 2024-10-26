@extends('layouts.app')
@section('titulo', 'Agregar Prodcuto')
@section('contenido')
    <div class="row justify-content-md-center m-5">
        <div class="col col-md-6">
            <h1>AGREGAR NUEVO PRODUCTO</h1>
            <form action="/productos" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" id="nombre">
                </div>
                <div class="mb-3">
                    <label for="marca" class="form-label">Marca</label>
                    <input type="text" name="marca" class="form-control" id="marca">
                </div>
                <div class="mb-3">
                    <label for="presentacion" class="form-label">Presentación</label>
                    <input type="text" name="presentacion" class="form-control" id="presentacion">
                </div>
                <div class="mb-3">
                    <label for="cantidad" class="form-label">Cantidad</label>
                    <input type="number" name="cantidad" class="form-control" id="cantidad">
                </div>
                <input class="btn btn-primary" type="submit" value="Guardar">
            </form>
        </div>
    </div>
@endsection
