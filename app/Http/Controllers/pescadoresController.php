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
        return view('userPescadores.criarPescadores');
        
    }
    public function pegarDados(Request $request) 
    {
        DB::table('pescadores')->insert(['nome' => $request->nome, 'cpf' => $request->cpf, 'telefone' => $request->telefone, 'endereco' => $request->endereco]);
        return view('components.sucesso');
    }
    public function mostrarPescador() 
    {
        $pescadores = DB::table('pescadores') -> select('*') -> get(0);

        // dd($pescadores);

        return view('userPescadores.mostrarPescadores', ['pescadores'=>$pescadores]);
    }
    public function deletarPescador() 
    {
        return view('userPescadores.deletarPescadores');
        
    }
    public function pegarId(Request $request) 
    {
        DB::table('pescadores')->where('id', '=', $request->id)->delete();
        return view('components.sucesso');
    }
    public function editarPescador()
    {
        return view('userPescadores.editarPescadores');
    }
    public function editarIdPescador(Request $request) 
    {
        DB::table('pescadores')->where('id', '=', $request->id)->update(
        ['nome' => $request->nome, 'cpf' => $request->cpf, 'telefone' => $request->telefone, 'endereco' => $request->endereco]);

        return view('components.sucesso');
    }

    
    
}
