<!-- Formulario para crear un nuevo usuario -->
<form action="{{ route('usuarios.guardar') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nombre">
    <input type="email" name="email" placeholder="Correo electrónico">
    <input type="password" name="password" placeholder="Contraseña">
    <button type="submit">Guardar</button>
</form>
