<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
    <!-- Bootstrap CSS v5.3.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-danger">
        <a class="navbar-brand" href="#">BIENVENIDO</a>
        <!-- Dropdown menu for user -->
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
        {{ Auth::user()->name }}
    </a>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            {{ ('Cerrar Sesión') }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
      </nav>
@yield('content')


<br> <br>
<a href="{{ route('usuarios.crear') }}" class="btn btn-success">Crear Usuario</a>
<!-- Table to display user data -->
<br> <br>

<table class="table table-striped table-bordered table-warning">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Correo electrónico</th>
            <th scope="col">Contraseña</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td scope="row">{{ $usuario->id }}</td>
                <td scope="row">{{ $usuario->name }}</td>
                <td scope="row">{{ $usuario->email }}</td>
                <td scope="row">{{ $usuario->password }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
<td>
    <a href="{{ route('usuarios.editar', $usuario->id) }}" class="btn btn-primary">Editar</a>
    <form action="{{ route('usuarios.eliminar', $usuario->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    </form>
</td>
<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
