<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        return view('estudiante.indexEstudiante');
    
    }
    public function store(Request $request){

        
    }
}
