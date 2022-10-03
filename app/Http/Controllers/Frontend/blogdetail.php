<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class blogdetail extends Controller
{
    function index()
    {
        return view('Frontend.blogdetail');
    }
}
