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
    public function localnaranjal()
    {
        $data = [
            'renderBody' => view('Locales/localeslima/naranjal')
        ];

        return view('Shared/_Layout', $data);
    }
    public function localuniversitaria()
    {
        $data = [
            'renderBody' => view('Locales/localeslima/universitaria')
        ];

        return view('Shared/_Layout', $data);
    }
    public function localsmp()
    {
        $data = [
            'renderBody' => view('Locales/localeslima/smp')
        ];

        return view('Shared/_Layout', $data);
    }

    public function localsantaanita()
    {
        $data = [
            'renderBody' => view('Locales/localeslima/santaanita')
        ];

        return view('Shared/_Layout', $data);
    }
}
