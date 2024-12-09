<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto CRUD</title>
</head>
<body>
    <h1>Proyecto CRUD</h1>
    <form action="{{ route('vehiculos.index') }}" method="get">
        <input type="text" name="search" placeholder="Buscar vehículo" value="{{ request()->get('search') }}">
        <button type="submit">🔍 Buscar</button>
    </form>
    <a href="{{ route('vehiculos.create') }}">Agregar Vehículo</a>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vehiculos as $vehiculo)
            <tr>
                <td>{{ $vehiculo->id }}</td>
                <td>{{ $vehiculo->nombre }}</td>
                <td>{{ $vehiculo->categoria }}</td>
                <td>{{ $vehiculo->descripcion_vehiculo }}</td>
                <td>
                    <a href="{{ route('vehiculos.edit', $vehiculo->id) }}">Editar</a>
                    <form action="{{ route('vehiculos.destroy', $vehiculo->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
