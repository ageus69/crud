@extends('layouts/app')
@section('contenido')
<div class="container">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <a href="{{route('proyectos.index')}}">Volver a la lista</a>

    @if(isset($proyecto))
        <h1>Cambiar datos de proyecto</h1>
        <form action="{{route('proyectos.update', [$proyecto])}}" method="POST">
            @method('patch')
    @else
        <h1>Crear nuevo proyecto</h1>   
        <form action="{{route('proyectos.store')}}" method="POST">
    @endif
    
        @csrf
        <label for="nombreProyecto">Nombre del proyecto: </label>
        <input type="text" name="nombreProyecto" value="{{old('nombreProyecto') ?? $proyecto->nombreProyecto ?? ''}}"><br>

        <label for="correo">Su correo electrónico: </label>
        <input type="email" name="correo" value="{{old('correo') ?? $proyecto->correo ?? ''}}"><br>

        <label for="nombrePersona">Su nombre: </label>
        <input type="text" name="nombrePersona" value="{{old('nombrePersona') ?? $proyecto->nombrePersona ?? ''}}"><br>

        <label for="detalles">Detalles del proyecto: </label><br>
        <textarea name="detalles">{{old('detalles') ?? $proyecto->detalles ?? ''}}</textarea><br>

        <button type="submit">ENVIAR</button>
    </form>
</div>
@endsection