<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pescadosController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterPescados');
    }
    public function mostrarPescados() 
    {
        $pescados = DB::table('pescados') -> select('name','massa','tamanho') -> get(0);

        // dd($pescadores);

        return view('userPescados.mostrarPescados', ['pescados'=>$pescados]);
    }
}
