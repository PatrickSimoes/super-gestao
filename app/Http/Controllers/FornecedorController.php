<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'ativo',
                'cnpj' => null,
                'ddd' => 41
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'Reprovado',
                'cnpj' => '00.000.000/0001-01'
            ]
        ];

        //echo isset($fornecedores[0] ['cnpj']) ? 'CPNJ Informado' : 'CNPJ não informado';//Operador ternario do PHP
        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
