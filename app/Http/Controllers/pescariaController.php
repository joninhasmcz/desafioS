<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pescariaController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterPescaria');
    }
    public function mostrarPescarias() 
    {
        $pescarias = DB::table('pescarias') -> select('*') -> get(0);

        return view('userPescarias.mostrarPescarias', ['pescarias'=>$pescarias]);
    }
    public function criarPescaria() 
    {
        return view('userPescarias.criarPescarias');
    }
    public function pegarDados(Request $request) 
    {
        DB::table('pescarias')->insert(['localizacao' => $request->localizacao, 'dataPescaria' => $request->data]);
        return view('components.sucesso');
    }
    public function editarPescaria()
    {
        return view('userPescarias.editarPescarias');
    }
    public function editarIdPescaria(Request $request) 
    {
        DB::table('pescarias')->where('id', '=', $request->id)->update(
        ['localizacao' => $request->localizacao, 'dataPescaria' => $request->data]);

        return view('components.sucesso');
    }
    public function deletarPescaria() 
    {
        return view('userPescarias.deletarPescarias');
        
    }
    public function deletarIdPescaria(Request $request) 
    {
        DB::table('pescarias')->where('id', '=', $request->id)->delete();
        return view('components.sucesso');
    }
}
