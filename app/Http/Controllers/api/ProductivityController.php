<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Productivity;
use Illuminate\Http\Request;

class ProductivityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productivity = Productivity::all();
        if(count($productivity) <= 0){
            return response()->json([
                'result' => false,
                'msg' => "Sin registros de productividad.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Registros de productividad encontrados.",
            'data' => $productivity
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $productivity = Productivity::find($id);
        if(!$productivity){
            return response()->json([
                'result' => false,
                'msg' => "Registro de productividad no encontrado.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Registro de productividad encontrado.",
            'data' => $productivity
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {        
        $productivity = Productivity::find($id);
        if(!$productivity){
            return response()->json([
                'result' => false,
                'msg' => "Registro de productividad no encontrado.",
                'data' => null
            ], 404);
        }
        $productivity->delete();
        return response()->json([
            'result' => true,
            'msg' => "Registro de productividad eliminada.",
            'data' => $productivity
        ]);

    }
}
