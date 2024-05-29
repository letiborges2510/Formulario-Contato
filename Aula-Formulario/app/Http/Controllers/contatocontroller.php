<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatocontroller extends Controller
{
    public function cadastrar(Request $request)
    {
        // Obtendo todos os dados do formulário
        $data = $request->all();

        var_dump($data);

        // Passando os dados para a view
        return view('dados', compact('data'));
    }
}