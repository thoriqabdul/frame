<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Models\Script;

class MizanController extends Controller
{
    public function CheckNaskah(){
        $data = Script::with('other','keyword','segment','user','publisher')->get();
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $data
        ]);

    }
}
