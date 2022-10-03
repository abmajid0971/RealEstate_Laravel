<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class blogfController extends Controller
{
    function index()
    {
        $pro=new Blog();

         $pro=Blog::all();
        return view('Frontend.blog')->with('pro', $pro);
    }
    function blogdetail(Request $req, $id)
    {

         $pro=new Blog();

        $pro=Blog::find($req->$id);
        return view('Frontend.blogdetail',['pro'=> $pro]);
    }

}
