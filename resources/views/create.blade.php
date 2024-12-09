<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Vehículo</title>
</head>
<body>
    <h1>Agregar Vehículo</h1>
    <form action="{{ route('vehiculos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="categoria">Categoría:</label>
        <input type="text" id="categoria" name="categoria" required><br>
        <label for="descripcion_vehiculo">Descripción:</label>
        <textarea id="descripcion_vehiculo" name="descripcion_vehiculo" required></textarea><br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
