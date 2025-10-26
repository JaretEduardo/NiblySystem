<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Carbon\Carbon;

class ProductContrller extends Controller
{
        public function countExpire(Request $request)
    {
        $products = Products::all();
        if(count($products) <= 0){
            return response()->json([
                'result' => false,
                'msg' => "Por el momento no hay productos registrados.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Productos encontrados.",
            'data' => [
                'expire' => count($products->where('Expiry_Date', "<", Carbon::now())),
                'normal' => count($products->where('Expiry_Date', ">",Carbon::now())),
                'danger' => $products->whereBetween('Expiry_Date', [Carbon::now(), Carbon::now()->addDays(5)])->count(),
            ]
        ], 200);
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::all();
        if(count($products) <= 0){
            return response()->json([
                'result' => false,
                'msg' => "Por el momento no hay productos registrados.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Productos encontrados.",
            'data' => $products
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $product = Products::find($id);
        if(!$product){
            return response()->json([
                'result' => false,
                'msg' => "No se encontro el recurso buscado.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Se ha encontrado los datos de " . $product->Product_Name .".",
            'data' => $product
        ], 202);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Products::find($id);
        if(!$product){
            return response()->json([
                'result' => false,
                'msg' => "No se encontro el recurso buscado.",
                'data' => null
            ], 404);
        }
        return response()->json([
            'result' => true,
            'msg' => "Se ha actualizado los datos de " . $product->Product_Name .".",
            'data' => $product
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::find($id);
        if(!$product){
            return response()->json([
                'result' => false,
                'msg' => "No se encontro el recurso buscado.",
                'data' => null
            ], 404);
        }
        $product->delete();
        return response()->json([
            'result' => true,
            'msg' => "Se ha eliminado el registro de " . $product->Product_Name .".",
            'data' => null
        ], 202);
    }

}
