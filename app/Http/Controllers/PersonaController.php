<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;

class PersonaController extends Controller
{
    //
    public function index()
    {

        $Persona = Persona::all(); 
        return response()->json($Persona);
    }

    public function create(Request $request)
    {
        
        Persona::create($request->all());
        return response()->json(['success' => true]);
    }

    public function show($persona_id)
    {
       
        $Persona= Persona::findOrFail($persona_id);
        
        return response()->json($Persona);
    }

    


    public function update(Request $request, $persona_id)
    {
        
            Persona::findOrFail($persona_id)->update($request->all());
            return response()->json(['success' => true]);
         
    }
 
    
    public function destroy($persona_id)
    {
        Persona::findOrFail($persona_id)->delete();
        return response()->json(['success' => true]);
    }
}
