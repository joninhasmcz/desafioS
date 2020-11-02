<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pescadoresController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterPescadores');
    }
    public function criarPescador() 
    {
        return view('user.criarPescadores');
    }
}
