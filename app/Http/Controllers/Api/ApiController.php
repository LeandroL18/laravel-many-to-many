<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Technology;

class ApiController extends Controller
{
    public function getTest(){
        return response() -> json([
            'status' => 'success',
            'message' => "Questo e' un messaggio di test"
        ]);
    }
    
    public function getTechnologies(){

        $technologies = Technology :: all();
        return response()->json([
            'status' => 'success',
            'technologies' => $technologies
        ]);
    }

}
