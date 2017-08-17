<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index');
    }

    public function save(){
        return view('register.index');
    }
}
