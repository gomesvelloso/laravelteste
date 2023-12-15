<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0=>["nome"     =>"Fornecedor_01", 
                "cnpj"     => "00.000.000/0000-01",
                "status"   =>'N',
                "ddd"      => 11,
                "telefone" => '(11) 2288-8125'
            ],
            1=>["nome"     =>"Fornecedor_02", 
                "cnpj"     => "00.000.000/0000-02",
                "status"   => 'Ativo',
                "ddd"      => 21,
                "telefone" => '(21) 9 9988-9845'                
            ],
        ];
        $nome = 'Dennis';
        return view('app.fornecedor.index', compact('fornecedores', 'nome'));
    }
}