<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Listado de usuarios
Route::get('/', [UserController::class, 'listar']);
//formulario Usuarios
Route::get('/form', [UserController::class, 'userform']);
//Guardar Usuarios
Route::post('/form/save', [UserController::class, 'save'])->name('save');
//Eliminar usuarios
Route::delete('/delete/{id}', [UserController::class, 'delete'])->name('delete');
//formulario para editar uduarios
Route::get('/editform/{id}',[UserController::class, 'editform'])->name('editform');
//Edicion de usuarios
Route::patch('/edit/{id}',[UserController::class, 'edit'])->name ('edit');