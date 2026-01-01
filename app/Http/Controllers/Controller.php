<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function successResponse($data,$message){
        return response()->json([
            'data'=>$data,
            'message'=>$message,
        ]);
    }
}
