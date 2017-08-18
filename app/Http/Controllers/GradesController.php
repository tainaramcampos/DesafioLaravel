<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

use App\Aluno;
use App\Nota;

class GradesController extends Controller
{
    public function index(){
        $alunos = Aluno::get();
        $notas = Nota::get();

        $media = Nota::avg('valor');
        $maxvalue = Nota::max('valor');

        $melhornota = Nota::where('valor', '=', $maxvalue)->get()->first();

        $melhoraluno = Aluno::where('id', '=', $melhornota->aluno_id)->get()->first();

        $minvalue = Nota::min('valor');

        $piornota = Nota::where('valor', '=', $minvalue)->get()->first();

        $pioraluno = Aluno::where('id', '=', $piornota->aluno_id)->get()->first();

        //encontrar uma maneira de passar todos esses dados
        return view('grades.index')
            ->with('melhoraluno', $melhoraluno->nome)
            ->with('pioraluno', $pioraluno->nome)
            ->with('alunos',$alunos)
            ->with('notas', $notas)
            ->with('media',$media);
    }
}
