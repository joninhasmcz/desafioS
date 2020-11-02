<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


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
    public function pegarDados(Request $request) 
    {
        DB::table('pescadores')->insert(['nome' => $request->nome, 'cpf' => $request->cpf, 'telefone' => $request->telefone, 'endereco' => $request->endereco]);
    }
    public function mostrarPescador() 
    {
        $pescadores = DB::table('pescadores') -> select('*') -> get(0);

        // dd($pescadores);

        return view('user.mostrarPescadores', ['pescadores'=>$pescadores]);
    }
    public function deletarPescador(Request $request) 
    {
        return view('user.deletarPescadores');
        DB::table('pescadores')->where('id', '=', $request-id)->delete();
    }

    
    
}
