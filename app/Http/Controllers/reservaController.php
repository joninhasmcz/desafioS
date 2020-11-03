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
        
        return Route("reservarInitial");
    }

}
