<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estadoDeCuenta;

class estadoDeCuentaController extends Controller
{
    public function getestadoDeCuenta(){
        return response()->json(estadoDeCuenta::all(),200);
    }
}
