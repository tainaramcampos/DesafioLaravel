<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Endereco;
use App\Nota;
use Illuminate\Routing\Controller;
use App\Aluno;
use App\Endereço;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function save(Request $request){

        $aluno = new Aluno;

        $nota = new Nota;
        $nota2 = new Nota;

        $endereco = new Endereco;

        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->save();

        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->matricula = $request->matricula;
        $aluno->endereco_id = $endereco->id;
        $aluno->save();

        $nota->valor = $request->valor1;
        $nota2->valor = $request->valor2;
        $nota->aluno_id = $nota2->aluno_id = $aluno->id;
        $nota->save();
        $nota2->save();

        return view('register.index')->with('message', 'Aluno Registrado');
    }
}