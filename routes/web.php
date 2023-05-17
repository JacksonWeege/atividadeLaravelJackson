<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
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
    return view('home');
});

Route::get('/filmes', [filmeController::class, 'listarFilmes'])->name('filmes');

Route::get('/cadastro', [filmeController::class, 'cadastrarFilme'])->name('cadastro');

Route::post('/cadastrar', [filmeController::class, 'efetuarCadastroFilme'])->name('filmes.cadastrar');

Route::delete('/filmes/deletar{id}', [filmeController::class, 'deletarFilme'])->name('filmes.delete');
