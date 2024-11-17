@extends('layouts.layout')

@section('contenido')
<a href="{{ route('categorias.create') }}">Agregar Categoría</a>
<table>
    <thead>
        <tr>
            <th>Descripción</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($categorias as $item)
        <tr>
            <td>{{ $item->descripcion }}</td>
            <td>
                <a href="{{ route('categorias.show', ['categoria'=>$item->id_categoria]) }}">Detalle</a>
            </td>
            <td> 
                <a href="{{ route('categorias.edit', ['categoria'=>$item->id_categoria]) }}">Editar</a>
            </td>
            <td>
                <form action="{{ route('categorias.destroy', ['categoria' => $item->id_categoria]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
@endsection