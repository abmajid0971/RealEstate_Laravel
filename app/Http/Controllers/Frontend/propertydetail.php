<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class propertydetail extends Controller
{
    function index()
    {
        return view('Frontend.propertydetail');
    }
}
