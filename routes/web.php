<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/lang/{locale}', function ($locale) {
    \App::setLocale($locale);
    Session::put('locale', $locale);
    return redirect()->back();
})->name('locale.setting');

//role
Route::get('/role/listado', [App\Http\Controllers\RolController::class, 'role_listado'])->name('role.listado'); 
Route::get('/role/crear', [App\Http\Controllers\RolController::class, 'role_crear_actualizar'])->name('role.crear'); 
Route::get('/role/actualizar/{id}', [App\Http\Controllers\RolController::class, 'role_crear_actualizar'])->name('role.actualizar'); 
Route::post('/role/guardar', [App\Http\Controllers\RolController::class, 'role_guardar'])->name('role.guardar'); 
Route::get('/role/eliminar/{id}', [App\Http\Controllers\RolController::class, 'role_eliminar'])->name('role.eliminar'); 

//usuario
Route::get('/usuario/listado', [App\Http\Controllers\UsuariosController::class, 'usuario_listado'])->name('usuario.listado'); 
Route::get('/usuario/crear', [App\Http\Controllers\UsuariosController::class, 'usuario_crear_actualizar'])->name('usuario.crear'); 
Route::get('/usuario/actualizar/{id}', [App\Http\Controllers\UsuariosController::class, 'usuario_crear_actualizar'])->name('usuario.actualizar'); 
Route::post('/usuario/guardar', [App\Http\Controllers\UsuariosController::class, 'usuario_guardar'])->name('usuario.guardar'); 
Route::get('/usuario/eliminar/{id}', [App\Http\Controllers\UsuariosController::class, 'usuario_eliminar'])->name('usuario.eliminar'); 

