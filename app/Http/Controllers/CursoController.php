<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;

class CursoController extends Controller
{
    //
    public function index()
    {

        $curso = Curso::all(); 
        return response()->json($curso);
    }

    
    public function create(Request $request)
    {
        
        Curso::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($curso_id)
    {
       
        $curso= Curso::findOrFail($curso_id);
        
        return response()->json($curso);
    }


    public function update(Request $request, $curso_id)
    {
        
            Curso::findOrFail($curso_id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($curso_id)
    {
        Curso::findOrFail($curso_id)->delete();
        return response()->json(['success' => true]);
    }
}
