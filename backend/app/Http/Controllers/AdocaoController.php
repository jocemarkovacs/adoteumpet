<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adocao;

class AdocaoController extends Controller
{
    public function index()
    {
       return Adocao::with('pet')->get();
    }

    /**
    * Cria um novo registro de adocao
    *
    * @param Request $request
    * @return Adocao
    */
    public function store(Request $request)
    {   //dd($variavel) serve para debuggar.Utilizado para retornar o JSON lá no insomnia
        // dd($request->all());
        /**
         * Faz a validação já usando algumas regras de validação do
         * Laravael. Vide na documentação as regras de validação existentes
         */
        $request->validate([
            "email" => ['required', 'email'],
            "valor" => ['required', 'numeric', 'between:10,100'],
            "pet_id" => ['required', 'int', 'exists:pets,id']
        ]);


        $dadosDaAdocao = $request->all();

        return Adocao::create($dadosDaAdocao);
    }

}
