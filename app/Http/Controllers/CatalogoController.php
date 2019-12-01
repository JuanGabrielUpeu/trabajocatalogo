<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catalogo;

class CatalogoController extends Controller
{
    public function index()
    {

        $catalogo = Catalogo::all(); 
        return response()->json($curso);
    }

    
    public function create(Request $request)
    {
        
        Catalogo::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($catalogo_id)
    {
       
        $catalogo= Catalogo::findOrFail($catalogo_id);
        
        return response()->json($curso);
    }


    public function update(Request $request, $catalogo_id)
    {
        
        Catalogo::findOrFail($catalogo_id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($catalogo_id)
    {
        Catalogo::findOrFail($catalogo_id)->delete();
        return response()->json(['success' => true]);
    }
}
