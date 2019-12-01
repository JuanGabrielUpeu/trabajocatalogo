<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class EgresadoDatosController extends Controller
{
    //
    public function index()
    {
        $egresa = DB::table('egresado')
        ->join('persona' , 'persona.persona_id' , 'egresado.persona_id')
        ->join('escuela_profesional','escuela_profesional.escuela_profesional_id','egresado.escuela_profesional_id')
        ->select('persona.persona_id','egresado.egresado_codigo_u' , 'persona.persona_ap_paterno' ,
         'persona.persona_ap_materno' , 'persona.persona_nombre' , 'persona.per_nro_documento' , 
         'persona.persona_celular' , 'egresado.egre_fecha_egreso' , 'persona.per_nro_documento' ,'escuela_profesional.escuela_profesional_nombre','egresado.egresado_estado')
        ->get();
        return response()->json($egresa);
    }

    
    public function create(Request $request)
    {
        
        EgresadoDatos::create($request->all());
        return response()->json(['success' => true]);
    }


    public function show($id)
    {
       
        $egresadodatos= EgresadoDatos::findOrFail($id);
        
        return response()->json($egresadodatos);
    }


    public function update(Request $request, $id)
    {
        
            EgresadoDatos::findOrFail($id)->update($request->all());
            return response()->json(['success' => true]);
         
    }

    
    public function destroy($id)
    {
        EgresadoDatos::findOrFail($id)->delete();
        return response()->json(['success' => true]);
    }
}
