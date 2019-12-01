<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;
class ClienteController extends Controller
{
    
    public function index()
    {

        $clientes = Cliente::all(); 
        return response()->json($clientes);
    }

    
    public function create(Request $request)
    {
        
        Cliente::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($id)
    {
       
        $cliente= Cliente::findOrFail($id);
        
        return response()->json($cliente);
    }


    public function update(Request $request, $id)
    {
        
            Cliente::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}

