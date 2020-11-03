<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pescadosController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterPescados');
    }
    public function mostrarPescados() 
    {
        $pescados = DB::table('pescados') -> select('*') -> get(0);

        // dd($pescados);

        return view('userPescados.mostrarPescados', ['pescados'=>$pescados]);
    }
    public function criarPescado() 
    {
        return view('userPescados.criarPescados');
    }
    public function pegarDados(Request $request) 
    {
        DB::table('pescados')->insert(['nome' => $request->nome, 'massa' => $request->massa, 'tamanho' => $request->tamanho]);
        return view('components.sucesso');
    }
    public function editarPescado()
    {
        return view('userPescados.editarPescados');
    }
    public function editarIdPescado(Request $request) 
    {
        DB::table('pescados')->where('id', '=', $request->id)->update(
        ['nome' => $request->nome, 'massa' => $request->massa, 'tamanho' => $request->tamanho]);

        return view('components.sucesso');
    }
    public function deletarPescado() 
    {
        return view('userPescados.deletarPescados');
        
    }
    public function deletarIdPescado(Request $request) 
    {
        DB::table('pescados')->where('id', '=', $request->id)->delete();
        return view('components.sucesso');
    }
}
