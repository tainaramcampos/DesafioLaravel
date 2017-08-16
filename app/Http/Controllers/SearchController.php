<?php


namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class SearchController extends Controller
{
    public function index(){
        return view('search.index');
    }
}
