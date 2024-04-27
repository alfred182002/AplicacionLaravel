<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
    <!-- Incluir estilos de Bootstrap si los estás utilizando -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Editar Usuario</h2>

        <!-- Formulario para editar usuario -->
        <form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $usuario->email }}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>

        <!-- Botón para regresar a la lista de usuarios -->
        <a href="{{ route('usuarios.index') }}" class="btn btn-secondary mt-3">Regresar a la Lista de Usuarios</a>
    </div>

    <!-- Incluir scripts de Bootstrap si los estás utilizando -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
