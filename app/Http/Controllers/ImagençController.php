<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imagen;

class ImagençController extends Controller
{
    public function index()
    {

        $curso = Imagen::all(); 
        return response()->json($curso);
    }

    
    public function create(Request $request)
    {
        
        Imagen::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($imagen_id)
    {
       
        $imagen= Imagen::findOrFail($imagen_id);
        
        return response()->json($curso);
    }


    public function update(Request $request, $imagen_id)
    {
        
        Imagen::findOrFail($imagen_id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($imagen_id)
    {
        Imagen::findOrFail($imagen_id)->delete();
        return response()->json(['success' => true]);
    }
}
