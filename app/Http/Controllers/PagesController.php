<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    // public function index(Request $request ){
        
    //     return view("pages.$request->page");
    // }
     public function index(){
    
    
    return view("pages.index2");
    
    
    }



    public function inConst(){
    
    
        return view("pages.inConst");
        
        
        }
}
