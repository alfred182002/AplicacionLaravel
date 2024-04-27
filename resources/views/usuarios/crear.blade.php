<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Usuario</title>
    <!-- Incluir estilos de Bootstrap si los estás utilizando -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Crear Nuevo Usuario</h2>
         <!-- Botón para regresar al Home -->
         <a href="{{ route('home') }}" class="btn btn-primary mb-3">Regresar al Home</a>

        <form action="{{ route('usuarios.guardar') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ingrese el nombre">
            </div>
            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese el correo electrónico">
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese la contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Usuario</button>
        </form>
    </div>

    <!-- Incluir scripts de Bootstrap si los estás utilizando -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
