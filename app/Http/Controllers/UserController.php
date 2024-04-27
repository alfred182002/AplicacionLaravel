<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    public function index()
{
    $usuarios = User::all();
    return view('usuarios.index', ['usuarios' => $usuarios]);
}

public function crear()
{
    return view('usuarios.crear');
}

public function guardar(Request $request)
{
    // Lógica para guardar un nuevo usuario
}

public function editar($id)
{
    $usuario = User::findOrFail($id);
    return view('usuarios.editar', ['usuario' => $usuario]);
}

public function actualizar(Request $request, $id)
{
    // Lógica para actualizar un usuario existente
}

public function eliminar($id)
{
    // Lógica para eliminar un usuario
}

}
