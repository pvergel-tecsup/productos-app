@extends('layouts.layout')

@section('contenido')
    <h2>Detalle de la Categoría</h2>

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" readonly><br>

    <a href="{{ route('categorias.edit', ['categoria' => $categoria->id_categoria]) }}">Editar</a> | 
    <a href="{{ route('categorias.index') }}">Regresar</a>

@endsection