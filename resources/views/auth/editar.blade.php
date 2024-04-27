<!-- Formulario para editar un usuario existente -->
<form action="{{ route('usuarios.actualizar', $usuario->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $usuario->name }}">
    <input type="email" name="email" value="{{ $usuario->email }}">
    <button type="submit">Actualizar</button>
</form>
