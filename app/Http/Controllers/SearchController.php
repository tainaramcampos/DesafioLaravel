<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Aluno;

class SearchController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function find(){
/*
        $aluno = $result = new Aluno;
        $result = aluno::where('nome','=', $dadodebusca)->first();
*/
        return view('student.search.info');
    }
}
