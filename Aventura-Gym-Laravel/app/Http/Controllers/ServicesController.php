<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Services/Index')
        ];

        return view('Shared/_Layout', $data);
    }

    public function reservar()
    {
        $data = [
            'renderBody' => view('Services/reservar')
        ];

        return view('Shared/_Layout', $data);
    }
}
