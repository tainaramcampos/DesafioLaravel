<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Input;
use App\Endereco;
use App\Nota;
use Illuminate\Routing\Controller;
use App\Aluno;
use Illuminate\Support\Facades\Redirect;

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

        return Redirect::back();
    }

    public function edit(){
        $id = Input::get('id');
        $aluno = Aluno::where('id', '=', $id)->get()->first();
        $endereco = Endereco::where('id', '=', $id)->get()->first();
        $nota = Nota::where('id', '=', $id)->get()->first();
        
        return view('student.edit.index')->with('aluno', $aluno)->with('endereco',$endereco)->with('nota',$nota);
    }

    public function update(Request $request){
        $aluno = Aluno::find($request->id);
        $endereco = Endereco::where('id', '=', $aluno->endereco_id)->get()->first();
        $nota = Nota::where('aluno_id', '=', $request->id)->get()->first();

        $endereco->logradouro = $request->logradouro;
        $endereco->numero = $request->numero;
        $endereco->bairro = $request->bairro;
        $endereco->save();

        $aluno->nome = $request->nome;
        $aluno->cpf = $request->cpf;
        $aluno->matricula = $request->matricula;
        $aluno->save();

        $nota->valor = $request->valor1;
        $nota->save();

        return Redirect::back();
    }
}