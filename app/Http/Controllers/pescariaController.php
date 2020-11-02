<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pescariaController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('templates.masterPescaria');
    }
}
