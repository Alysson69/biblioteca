<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivrosController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\AlugueisController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::prefix('livros')->group(function () {
    Route::get('/', [LivrosController::class, 'index'])->name('livros.index');
    Route::delete('/delete', [LivrosController::class, 'delete'])->name('livros.delete');
    Route::get('/cadastrarLivro', [LivrosController::class, 'cadastrarLivro'])->name('cadastrar.livro');
    Route::post('/cadastrarLivro', [LivrosController::class, 'cadastrarLivro'])->name('cadastrar.livro');
});
