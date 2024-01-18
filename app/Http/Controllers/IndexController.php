<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        //TODO: Leer de la base de datos las imagenes e injectarlas en el view
        // ejemplo: return view('index', compact('images'))
        return view('index');
    }
}
