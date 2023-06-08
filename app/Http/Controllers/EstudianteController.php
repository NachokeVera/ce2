<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estudiante;
use App\Models\Propusta;

class EstudianteController extends Controller
{
    public function index(){
        $estudiantes = Estudiante::all();
        return view('estudiante.indexEstudiante',compact('estudiantes'));
    
    }
    public function store(Request $request){
    //Validacion

      if ($request->hasfile('propuestaInput')){
        $propuesta=$request->file('propuestaInput');
        
      };
    }
}
