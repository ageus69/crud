<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Proyectos públicos</title>

    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        th, td {
          padding: 5px;
          text-align: center;    
        }
    </style>

</head>
<body>
    <h1>Proyectos públicos</h1>
    <h2><a href="proyectos/create">Generar un proyecto nuevo</a></h2>
    <table>
        <tr>
            <td>ID</td>
            <td>NOMBRE</td>
        </tr>
    @foreach ($proyectos as $proyecto)
        <tr>
            <td>{{$proyecto->id}}</td>
            <td><a href="/proyectos/{{$proyecto->id}}">{{$proyecto->nombreProyecto}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>