<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        //return "Este é o index do ContatoController!";

        $contato = [
            (object)['nome' => 'Maria', 'contato' => '11 9 1234-5678'],
            (object)['nome' => 'José', 'contato' => '11 9 1234-5678']
        ];

        $contatos = new Contato();
        $listaContatos = $contatos->lista();

        return view('contato.index', compact('contato'));
    }

    public function criar(Request $request)
    {
        dd($request->all());
        return "Este é o criar do ContatoController!";
    }

    public function editar()
    {
        return "Este é o editar do ContatoController!";
    }
}
