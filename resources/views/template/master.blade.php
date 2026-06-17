<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto 2</title>
</head>
<body>
    <h1>Sistema de Ventas XYZ</h1>
    <nav>
        <a href="{{ route('producto.index') }}">Productos</a>
        &nbsp;
        <a href="{{ route('categoria.index') }}">Categorias</a>
    </nav>
    <hr>

    @yield('content')
</body>
</html>
