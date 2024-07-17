<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Exibir o formulário de cadastro de produto
    public function create()
    {
        return view('create');
    }

    // Salvar um novo produto
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'required|string|max:1000',
            'valor' => 'nullable|numeric',
            'disponivel' => 'required|boolean',
        ]);

        Produto::create($validatedData);

        return redirect()->route('index')->with('success', 'Produto cadastrado com sucesso!');
    }

    // Listar todos os produtos
    public function index()
    {
        $produtos = Produto::orderBy('valor', 'asc')->get();
        return view('index', compact('produtos'));
    }
}
