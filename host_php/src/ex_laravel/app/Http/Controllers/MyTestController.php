<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyTestController extends Controller {
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function index(\Illuminate\Http\Request $request){
        $param1 = $request->input("param1");
        return "My Test Controller. <pre style='padding: 5px; background-color: cyan;display: inline-block'>param1: <b>{$param1}</b></pre>";
    }

    
    
}
