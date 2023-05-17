<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class filmeController extends Controller
{
    public function index() {
        
    }

    public function listarFilmes() {
        $filmes = Filme::all();
        return view('filmes', compact('filmes'));
    }
    
    public function cadastrarFilme() {
        return view('cadastro');
    }

    public function efetuarCadastroFilme(Request $request) {
        $filme = $request->all();
        $filme = Filme::create($filme);
        
        return redirect()->route('cadastro')->with('sucesso', 'filme cadastrado com sucesso');
    }

    public function deletarFilme($id) {
        $filme = Filme::find($id);
        $filme->delete();

        return redirect()->route('filmes')->with('sucesso', 'filme deletado com sucesso');
    }
}
