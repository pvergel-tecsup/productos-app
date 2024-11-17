@extends('layouts.layout')

@section('contenido')

<form action="{{ route('categorias.update', ['categoria' => $categoria->id_categoria]) }}" method="POST">
    @csrf
    @method('PATCH')

    <label for="descripcion">Descripción</label>
    <input type="text" name="descripcion" value="{{ $categoria->descripcion }}" required><br>

    <button type="submit">Guardar</button> 
    <a href="{{ route('categorias.index') }}">Regresar</a>

</form>

@endsection