<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class about extends Controller
{
    function index()
    {
        
        return view('Backend.about');
        
    }
}
