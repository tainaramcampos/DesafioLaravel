<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class GradesController extends Controller
{
    public function index(){
        return view('grades.index');
    }
}
