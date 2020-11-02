<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class reservaController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterReserva');
    }
}
