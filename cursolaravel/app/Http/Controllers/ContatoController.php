<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index(){
    	$contatos = [
    		(object)["nome"=>"Maria","tel"=>"123456789"],
    		(object)["nome"=>"Pedro","tel"=>"987654321"]
    	];

        $contato = new Contato();
        $cont = $contato->lista();
//        dd($cont->nome);
        dd($contato->lista());

//    	return view('contato.index', compact('contatos','outra lista se houvesse'));
    	return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req){
//    	dd($req);
//    	dd($req->nome);
    	dd($req->all());
    	return "Esse é meu controller: CRIAR";
    }
    public function editar(){
    	return "Esse é meu controller: EDITAR";
    }

}
