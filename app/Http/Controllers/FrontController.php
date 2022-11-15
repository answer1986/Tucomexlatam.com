<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrusel;

class FrontController extends Controller
{
    public function index(){

        $carrusel = Carrusel::ordeBy('orden','asc')->get();
        return view('inicio', compact('carrusel'));
    }
}
