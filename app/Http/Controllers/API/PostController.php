<?php

namespace App\Http\Controllers\API;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
   
    public function suma($num1, $num2){

        $suma = $num1 + $num2;
        return response()->json(['suma' => $suma]);
    }


    public function multiplicacion($num1, $num2){
        $multiplicacion = $num1 * $num2;
        return response()->json(['multiplicacion' => $multiplicacion]);
        
    }
}
