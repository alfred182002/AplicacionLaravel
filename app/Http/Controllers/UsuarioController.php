<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UsuarioController extends Controller
{
    public function crear()
    {
        // Mostrar el formulario para crear un nuevo usuario
        return view('usuarios.crear');
    }

    public function guardar(Request $request)
    {
        // Validar y guardar los datos del nuevo usuario
        $usuario = new User();
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->password = bcrypt($request->input('password'));
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario creado correctamente');
    }

    public function editar($id)
    {
        // Obtener el usuario por su ID y mostrar el formulario de edición
        $usuario = User::findOrFail($id);
        return view('usuarios.editar', compact('usuario'));
    }

    public function actualizar(Request $request, $id)
    {
        // Validar y actualizar los datos del usuario
        $usuario = User::findOrFail($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->save();

        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado correctamente');
    }

    public function eliminar($id)
    {
        // Eliminar un usuario por su ID
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado correctamente');
    }
    public function index()
    {
        // Obtener todos los usuarios desde el modelo User
        $usuarios = User::all();

        // Cargar la vista usuarios.index y pasar los usuarios como datos
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    // Otros métodos del controlador para crear, editar, eliminar usuarios, etc.

}
