<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class register extends Controller
{
    function index()
    {
        return view('Frontend.register');
    }
}
