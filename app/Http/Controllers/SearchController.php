<?php


namespace App\Http\Controllers;
use App\Aluno;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function find(){
        $category = Input::get('dadodebusca');

        $aluno = Aluno::where('nome', '=', $category)->get()->first();

        if($aluno == null){
            return "User Not Found!";
        }else{
            return view('student.search.info', ['aluno' => $aluno] );
        }

        }
}
