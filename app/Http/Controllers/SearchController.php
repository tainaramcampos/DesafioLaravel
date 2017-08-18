<?php


namespace App\Http\Controllers;
use App\Aluno;
use App\Endereco;
use App\Nota;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function find()
    {
        $category = Input::get('dadodebusca');
        $tipo = Input::get('tipodebusca');

        switch ($tipo){
            case 'CPF':
                $aluno = Aluno::where('cpf', '=', $category)->get()->first();
                break;

            case 'Nome':
                $aluno = Aluno::where('nome', '=', $category)->get()->first();
                break;

            case 'Matrícula':
                $aluno = Aluno::where('matricula', '=', $category)->get()->first();
                break;
        }

        if (count($aluno)) {
            $endereco = Endereco::where('id', '=', $aluno->endereco_id)->get()->first();
            $nota = Nota::where('aluno_id', '=', $aluno->id)->get()->first();
            return view('student.search.info')->with('aluno', $aluno)->with('endereco', $endereco)->with('nota', $nota);
        } else {
            return "User Not Found!";
        }


    }
}

