@extends('layouts/app')
@section('contenido')
<div class="container">
    <h1>Proyectos públicos</h1>
    <h2><a href="proyectos/create">Generar un proyecto nuevo</a></h2>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
        </tr>
    @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{$proyecto->id}}</td>
            <td><a href="proyectos/{{$proyecto->id}}">{{$proyecto->nombreProyecto}}</td>
        </tr>
    @endforeach
    </table>
</div>
@endsection