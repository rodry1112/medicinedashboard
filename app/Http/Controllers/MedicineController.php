<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Medicine;

class MedicineController extends Controller
{
    public function listMedicine(){
        $medicinas = Medicine::all();
        return response()->json([
            'medicinas' => $medicinas,
            'status' => true
        ]);
    }
    public function searchmedicine(Medicine $medicina){
        return response()->json([
            'medicina'=>$medicina->nombre
        ]);
    }
    public function deletedmedicine( Medicine $medicina){
        try {
         
        $medicina->delete();
        return response() ->json([
            'se borro exitosamente'
        ]);
        } catch (exception $e) {
            return response()->json([
                'message'=>'se error en la eliminacion de medicamento'
            ]);
        }
        
    }
    public function savemedicine(Request $request){
        try {
            $medicina = new Medicine;
            $medicina->nombre = $request->nombre;
            $medicina->dosificacion = $request->dosificacion;
            $medicina->usos = $request->usos;
            $medicina->contraIndicaciones = $request->contraIndicaciones;
            $medicina->administracion = $request->administracion;

            $medicina->save();
            return response()->json([
                'message' => 'se ingreso el medicamento con exito'
            ]);
        } catch (Exception $e ) {
            return response()->json([
                'message' => 'error al registrar cliente'
            ]);
        }
    }
    public function updatemedicine(Request $request,Medicine $medicina){
        try {
            $medicina->nombre = $request->nombre;
            $medicina->dosificacion = $request->dosificacion;
            $medicina->usos = $request->usos;
            $medicina->contraIndicaciones = $request->contraIndicaciones;
            $medicina->administracion = $request->administracion;

            $medicina->update();
            return response()->json([
                'message'=> 'cliente actualizado con exito'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'message'=> 'error en la actualizacion del ciente'
            ]);
        }
    }
}
