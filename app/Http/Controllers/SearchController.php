<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function index(){
        return view('student.index');
    }

    public function find(){
        return view('student.search.info');
    }
}
