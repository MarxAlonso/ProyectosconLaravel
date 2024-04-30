<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\VehiculoModel;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'renderBody' => view('Home/Index')
        ];

        return view('Shared/_Layout', $data);
    }
}
