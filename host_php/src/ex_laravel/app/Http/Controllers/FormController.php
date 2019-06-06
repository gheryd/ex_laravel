<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of FormController
 *
 * @author gheryd
 */
class FormController extends Controller{
    //put your code here
    
    public function index(){
        return view('form');
    }
    
    public function save(\Illuminate\Http\Request $request){
        
        $prop1 = $request->post("prop1");
        return "TODO save! <br/> prop1: <b>{$prop1}</b>";
    }
}
