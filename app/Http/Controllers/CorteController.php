<?php

namespace App\Http\Controllers;

use App\Corte;
use Illuminate\Http\Request;

class CorteController extends Controller{
    public function index(){
        $cortes = Corte::all();
        return view('cortes.index', compact('cortes'));
    }
    public function create(){
        return view('cortes.create');
    }
}
