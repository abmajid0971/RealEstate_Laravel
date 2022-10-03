<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Properties;

class buysalerent extends Controller
{
    function index()
    {
        return view('Frontend.buysalerent');
    }
    function buy()
    {
        
        $pr=new Properties();

        $pr=Properties::where('Purpose',"Buy")->get();
        // echo "$pr->Proptery_Name";
        return view('Frontend.buysalerent',['pr'=> $pr]);
    }
    function sale()
    {
        
        $pr=new Properties();

        $pr=Properties::where('Purpose',"sale");
        // echo "$pr->Proptery_Name";
        return view('Frontend.buysalerent')->with('pr', $pr);
    }
    function rent()
    {
        
        $pr=new Properties();

        $pr=Properties::where('Purpose',"rent");
        // echo "$pr->Proptery_Name";
        return view('Frontend.buysalerent')->with('pr', $pr);
    }
}
