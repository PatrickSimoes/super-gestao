<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste(int $p1 , int $p2){
        //echo "$p1 + $p2 = ". $p1+ $p2;

        //Como passar parametros do controller para a view;
        //return view('site.teste', ['x'=> $p1, 'y'=> $p2]);//Array Associativo
        return view('site.teste', compact('p1', 'p2'));//Compact(MAIS USADO)
        //return view('site.teste')->with('p1', $p1)->with('p2', $p2);// metodo With
    }
}
