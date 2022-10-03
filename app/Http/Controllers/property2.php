<?php

namespace App\Http\Controllers;
use App\Models\Properties;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class property2 extends Controller
{
    function index()
    {
        
        return view('Backend.PropertyManagement.Createproperty1');
        
    }
    function SaveProperty(Request $req)
    {
        
        
        $pro=new Properties();
        
        
        $pro->Title=$req->txtTitle;
        $pro->Detail=$req->txtDetail;
        $pro->Price=$req->txtPrice;
        $pro->Purpose=$req->Purpose;

        $pro->Location=$req->txtLocation;
        $pro->Kitchen=$req->txtKitchen;
        $pro->Parking=$req->txtParking;
        $pro->LivingRoom=$req->txtLivingRoom;

        $pro->Bed=$req->txtBed;
        $pro->Address=$req->txtAddress;
        $pro->Agent=$req->txtAgent;

        // $imgu=imageupload($req->imgfile);


        
        if ($req->hasfile('imgfile')) {
            # code...
        $varimg =$req->file('imgfile');
        $varimg_ext=$varimg->getclientOriginalExtension();
        $varimg_name="property".rand(123456,999999).".".$varimg_ext;
        $img_dest_path=public_path('/uploads/');
        $varimg->move($img_dest_path,$varimg_name);
        $pro->P_image=$varimg_name;
    }
        $pro->ShowonBanner=$req->customCheckbox1==true?'1':'0';
        $pro->Featured=$req->customCheckbox2==true?'1':'0';
        $pro->Recommended=$req->customCheckbox3==true?'1':'0';

        $pro->save();

           return redirect('AllProperties')->with('status','Property added successfully');
    }
    // function imageupload(Request $req, $img)
    // {
    //     $varimg =$request->file('imgfile');
    //     $varimg_ext=$varimg->getclientOriginalExtension();
    //     $varimg_name="property".rand(123456,999999).$varimg_ext;
    //     $img_dest_path=public_path('/uploads/');
    //     $img_file->move($img_dest_path,$varimg_name);
    // }

    
    function ShowAllProperties()
    {
        $pro=new Properties();

         $pro=Properties::all();

         return view('Backend.PropertyManagement.PropertiesList')->with('pro', $pro);
        
    }
    function EditProp(Request $req, $id)
    {
        $pro=new Properties();
        $pro=Properties::find($id);
        
        
        // $property=Propertys::all();

         return view('Backend.PropertyManagement.EditPropertyForm')->with('pro', $pro);
        
    }
    function DeletePropertyCommit(Request $req, $id)
    {
        // $pro=new Properties();
        // $pro=Properties::destroy($id);
        echo "delete function called";
        
        // $property=Propertys::all();

        // return view('Backend.PropertyManagement.PropertiesList');
         
        
    }
        function updateProperty(Request $req)
    {
        // $pro=new Properties();

        $pro=Properties::find($req->txtid);
        
        
        $pro->Title=$req->txtTitle;
        $pro->Detail=$req->txtDetail;
        $pro->Price=$req->txtPrice;
        $pro->Purpose=$req->Purpose;

        $pro->Location=$req->txtLocation;
        $pro->Kitchen=$req->txtKitchen;
        $pro->Parking=$req->txtParking;
        $pro->LivingRoom=$req->txtLivingRoom;

        $pro->Bed=$req->txtBed;
        $pro->Address=$req->txtAddress;
        $pro->Agent=$req->txtAgent;

        // $imgu=imageupload($req->imgfile);


        
        if ($req->hasfile('imgfile')) {
            # code...
            $destination='/uploads'.$pro->P_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
        $varimg =$req->file('imgfile');
        $varimg_ext=$varimg->getclientOriginalExtension();
        $varimg_name="property".rand(123456,999999).".".$varimg_ext;
        $img_dest_path=public_path('/uploads/');
        $varimg->move($img_dest_path,$varimg_name);
        $pro->P_image=$varimg_name;
    }
        $pro->ShowonBanner=$req->customCheckbox1==true?'1':'0';
        $pro->Featured=$req->customCheckbox2==true?'1':'0';
        $pro->Recommended=$req->customCheckbox3==true?'1':'0';

        $pro->save();
return view('Backend.PropertyManagement.EditPropertyForm')->with('pro', $pro);
        
    }
    function viewpropertyy(Request $req, $id)
    {
        $pro1=new Properties();

        $pro1=Properties::find($req->$id);
        // $pro1=new Properties();

        // $pro1=Properties::all();
        return view('Backend.PropertyManagement.ViewProperty')->with('pro1', $pro1);
        
    }
    
}
