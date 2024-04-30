<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NosotrosController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Nosotros/Index')
        ];

        return view('Shared/_Layout', $data);
    }
}