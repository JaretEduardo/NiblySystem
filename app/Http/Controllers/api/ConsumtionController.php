<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Consumption;
use Illuminate\Http\Request;

class ConsumtionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consumitions = Consumption::all();
        if(count($consumitions) <= 0){
            return response()->json([
                'result' => false,
                'msg' => "No hay consumos registrados",
                'data' => null
            ]);
        }
        return response()->json([
            'result' => true,
            'msg' => "Consumos encontrados.",
            'data' => $consumitions
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $consumition = Consumption::find($id);
        if(!$consumition){
            return response()->json([
                'result' => false,
                'msg' => "Consumos no encontrado.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Consumos encontrados.",
            'data' => $consumition
        ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $consumition = Consumption::find($id);
        if(!$consumition){
            return response()->json([
                'result' => false,
                'msg' => "Consumos no encontrado.",
                'data' => null
            ], 404);
        }
        $consumition->delete();
        return response()->json([
            'result' => true,
            'msg' => "Consumos encontrados.",
            'data' => $consumition
        ]);
    }
}
