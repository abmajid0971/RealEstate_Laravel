<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Properties;

class index extends Controller
{
    function index()
    {
         $pro=new Properties();

         $pro=Properties::where("ShowonBanner",1)->get();
         $pro=new Properties();

         $pro=Properties::where("Featured",1)->get();
         $pro=new Properties();

         $pro=Properties::where("Recommended",1)->get();
        return view('Frontend.index',['pro'=> $pro]);
    }
    function propertydetail(Request $req, $id)
    {
        $pd=new Properties();
        $pd=Properties::find($id);
        // $pd=new Properties();
        Recommended();
        //  $pd=Properties::where("Recommended",1)->get();
        return view('Frontend.propertydetail')->with('pd', $pd);
    }
    function Recommended()
    {
        $pd=new Properties();
    

         $pd=Properties::where("Recommended",1)->get();
        return view('Frontend.propertydetail')->with('pd', $pd);
    }
    
    
}
