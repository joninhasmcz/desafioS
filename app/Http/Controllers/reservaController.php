<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reservaController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterReserva');
    }
    public function reservaInitial() 
    {     
        return  view('userReservas.campeonatoReserva');
    }

    public function reservaId(Request $request) 
    {
        DB::table('reservas')->insert(['id_pescaria' => $request->id_pescaria, 'id_pescado' => $request->id_pescado, 'id_pescador' => $request->id_pescador]);        
        
        return redirect()->back();
    }
    public function mostrarCampeonatoPeso() 
    {
        $pescadorPodio = DB::table('reservas')
        ->join('pescadores', 'pescadores.id', '=', 'reservas.id_pescador')
        ->join('pescarias', 'pescarias.id', '=', 'reservas.id_pescaria')
        ->join('pescados', 'pescados.id', '=', 'reservas.id_pescado')
        ->select('pescadores.nome as pescadores_nome', 'pescarias.localizacao', 'pescados.nome as pescados_nome', 'pescados.massa')
        ->orderby('pescados.massa', 'desc')
        ->limit(3)->get();
        
        //return dd($pescadorPodio);

        return view('userReservas.classificacaoReservaP', ['pescadores'=>$pescadorPodio]);
    } 
    public function mostrarCampeonatoQuantidade() 
    {
        $pescadorPodio = DB::table('reservas')
        ->join('pescadores', 'pescadores.id', '=', 'reservas.id_pescador')
        ->join('pescarias', 'pescarias.id', '=', 'reservas.id_pescaria')
        ->join('pescados', 'pescados.id', '=', 'reservas.id_pescado')
        ->select('pescadores.nome as pescadores_nome')
        ->distinct('pescadores.nome')
        ->get();
        

        
        
        return dd($pescadorPodio->count());

        //return view('userReservas.classificacaoReservaQ', ['pescadores'=>$pescadorPodio]);
    }
}
