@extends('layouts.layout')

@section('contenido')

<h2>Nueva Categoría</h2>

<form action="{{ route('categorias.store') }}" method="POST">
    @csrf

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" autocomplete="off" required><br>

    <button type="submit">Enviar</button> 
    <a href="{{ route('categorias.index') }}">Regresar</a>
</form>

@endsection