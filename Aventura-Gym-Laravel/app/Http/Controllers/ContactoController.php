<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Contacto/Index')
        ];

        return view('Shared/_Layout', $data);
    }
}
