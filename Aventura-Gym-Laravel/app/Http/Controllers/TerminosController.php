<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TerminosController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Terminos-Condiciones/Index')
        ];

        return view('Shared/_Layout', $data);
    }
}
