<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/usuarios', [UserController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/crear', [UserController::class, 'crear'])->name('usuarios.crear');
Route::post('/usuarios/guardar', [UserController::class, 'guardar'])->name('usuarios.guardar');
Route::get('/usuarios/{id}/editar', [UserController::class, 'editar'])->name('usuarios.editar');
Route::put('/usuarios/{id}/actualizar', [UserController::class, 'actualizar'])->name('usuarios.actualizar');
Route::delete('/usuarios/{id}/eliminar', [UserController::class, 'eliminar'])->name('usuarios.eliminar');

use App\Http\Controllers\UsuarioController;

Route::get('/usuarios/crear', [UsuarioController::class, 'crear'])->name('usuarios.crear');
Route::post('/usuarios/guardar', [UsuarioController::class, 'guardar'])->name('usuarios.guardar');
Route::get('/usuarios/{id}/editar', [UsuarioController::class, 'editar'])->name('usuarios.editar');
Route::put('/usuarios/{id}/actualizar', [UsuarioController::class, 'actualizar'])->name('usuarios.actualizar');
Route::delete('/usuarios/{id}/eliminar', [UsuarioController::class, 'eliminar'])->name('usuarios.eliminar');


Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
