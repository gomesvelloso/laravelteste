<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1, int $p2) {
        $soma = $p1+$p2;
            
        /* Retornando dados por array 
            $data = array("soma"=>$soma, "p1"=>$p1, "p2"=>$p2);
            return view('site.teste', $data);
        */

        /*Retornando dados através do método with
            return view('site.teste')
            ->with('p1', $p1)
            ->with('p2', $p2)
            ->with('soma',$soma);
        */

        #Retornando dados através do método compact
        return view('site.teste', compact('p1', 'p2', 'soma'));
    }
}
