@extends('layouts/app')
@section('contenido')

<div class="container">
    <a href="{{$proyecto->id}}/edit">Editar proyecto</a><br>
    <a href="{{route('proyectos.index')}}">Volver a la lista</a>

    <table class="table">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
            <td>PROPIETARIO</td>
            <td>CORREO</td>
            <td>DETALLES</td>
        </tr>
        <tr>
            <td>{{$proyecto->id}}</td>
            <td>{{$proyecto->nombreProyecto}}</td>
            <td>{{$proyecto->nombrePersona}}</td>
            <td>{{$proyecto->correo}}</td>
            <td>{{$proyecto->detalles}}</td>
        </tr>
    </table>

    <form action="{{route('proyectos.destroy', [$proyecto])}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit">Eliminar</button>
    </form>

</div>    

@endsection