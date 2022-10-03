<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class agents extends Controller
{
    function index()
    {
        return view('Frontend.agents');
    }
}
