<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
</head>
<body>
    <h1>Crear nuevo proyecto</h1>
    <form action="/proyectos" method="POST">
        @csrf
        <button type="submit">ENVIAR</button>
    </form>
</body>
</html>