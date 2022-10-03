<?php

namespace App\Http\Controllers;
use App\Models\Blog;

use Illuminate\Http\Request;

class blogController extends Controller
{
    function index()
    {
        
        return view('Backend.Blog.CreateBlog');
        
    }
    function SaveBlog(Request $req)
    {
        
        
        $pro=new Blog();
        
        
        $pro->Title=$req->txtTitle;
        $pro->Description=$req->txtDescription;
        


        
        if ($req->hasfile('imgfile')) {
            # code...
        $varimg =$req->file('imgfile');
        $varimg_ext=$varimg->getclientOriginalExtension();
        $varimg_name="blog".rand(123456,999999).".".$varimg_ext;
        $img_dest_path=public_path('/uploads/blog');
        $varimg->move($img_dest_path,$varimg_name);
        $pro->B_image=$varimg_name;
    }
        

        $pro->save();

           return redirect('BlogList')->with('status','Property added successfully');
    }
    // function imageupload(Request $req, $img)
    // {
    //     $varimg =$request->file('imgfile');
    //     $varimg_ext=$varimg->getclientOriginalExtension();
    //     $varimg_name="property".rand(123456,999999).$varimg_ext;
    //     $img_dest_path=public_path('/uploads/');
    //     $img_file->move($img_dest_path,$varimg_name);
    // }

    
    function BlogList()
    {
        $pro=new Blog();

         $pro=Blog::all();

         return view('Backend.Blog.BlogList')->with('pro', $pro);
        
    }
    function EditBlog(Request $req, $id)
    {
        $pro=new Blog();
        $pro=Blog::find($id);
        
        
        // $property=Propertys::all();

         return view('Backend.Blog.EditBlog')->with('pro', $pro);
        
    }
        function updateBlog(Request $req)
    {
        $pro=new Blog();

        $pro=Blog::find($req->txtID);
        
        
        $pro->Title=$req->txtTitle;
        $pro->Description=$req->txtDescription;
        


        
        if ($req->hasfile('imgfile')) {
            # code...
        $varimg =$req->file('imgfile');
        $varimg_ext=$varimg->getclientOriginalExtension();
        $varimg_name="blog".rand(123456,999999).".".$varimg_ext;
        $img_dest_path=public_path('/uploads/blog');
        $varimg->move($img_dest_path,$varimg_name);
        $pro->B_image=$varimg_name;
    }
        

        $pro->save();
        return view('Backend.Blog.BlogList')->with('pro', $pro);

        
    }
    function viewBlog(Request $req, $id)
    {
        $pro1=new Properties();

        $pro1=Properties::find($req->$id);


         

         return view('Backend.PropertyManagement.ViewProperty')->with('pro1', $pro1);
        
    }
    

}