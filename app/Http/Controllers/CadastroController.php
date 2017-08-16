<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CadastroController extends Controller
{
    public function index(){
        return view('cadastro.index');
    }
}
