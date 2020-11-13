<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GruposController;

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
});

Route::get('/dashboard', function () {
    return view("admin.dashboard");
})->name("admin.dashboard");

Route::get("/dashboard/newUser", function () {
    return view('admin.newUser');
})->name("admin.newUser");

Route::get("/dashboard/createConnection", [GruposController::class, 'create'])->name("admin.createConnection");

Route::post('/dashboard/createGroup', [GruposController::class ,'store'])->name('admin.createGroup');
Route::put("/dashboard/updateGroup", [ GruposController::class, 'update'])->name('admin.updateGroup');
Route::get("/dashboard/listConnections",  [GruposController::class ,'index'])->name("admin.listConnections");
Route::get('/dashboard/deleteConnection/{id}', [GruposController::class, 'destroy'])->name('admin.delete');

/*
** Examples
Route::get('/admin/cursos', [CursoController::class, 'index'])->name('admin.cursos');

Route::get('/admin/adicionar', [CursoController::class, 'store'])->name('admin.cursos.store');
Route::post('/admin/salvar', [CursoController::class, 'save'])->name('admin.cursos.save');
Route::get('/admin/editar/{id}', [CursoController::class, 'editar'])->name('admin.cursos.editar');
Route::put('/admin/atualizar/{id}', [CursoController::class, 'atualizar'])->name('admin.cursos.atualizar');
Route::get('/admin/deletar/{id}', [CursoController::class, 'deletar'])->name('admin.cursos.deletar');
 */