<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;

class aboutController extends Controller
{
    function index()
    {
        
        return view('Backend.About.AddAbout');
        
    }
    function SaveAbout(Request $req)
    {
        
        
        $pro=new about();
        
        
        $pro->BusinessBackground=$req->txtBusinessBackground;
        $pro->CompanyProfile=$req->txtCompanyProfile;
        $pro->aboutimage=$req->file('imgfile');
        
    //     if ($req->hasfile('imgfile')) {
    //         # code...
    //     $varimg =$req->file('imgfile');
    //     $varimg_ext=$varimg->getclientOriginalExtension();
    //     $varimg_name="about".rand(123456,999999).".".$varimg_ext;
    //     $img_dest_path=public_path('/uploads/about/');
    //     $varimg->move($img_dest_path,$varimg_name);
    //     $pro->aboutimage=$varimg_name;
    // }
        

        $pro->save();

        //    return redirect('aboutlist')->with('status','About added successfully');
    }
}
