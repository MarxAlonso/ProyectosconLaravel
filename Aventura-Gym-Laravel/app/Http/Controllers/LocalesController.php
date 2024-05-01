<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehiculoModel;

class LocalesController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Locales/Index')
        ];

        return view('Shared/_Layout', $data);
    }

    public function localsantana()
    {
        $data = [
            'renderBody' => view('Locales/localeslima/santana')
        ];

        return view('Shared/_Layout', $data);
    }
}
