<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Propertys;
use App\Models\Properties;

class Property extends Controller
{
    function index()
    {
        
        return view('Backend.PropertyManagement.Createproperty1');
        
    }
    function addproperty()
    {
        
        return view('Backend.PropertyManagement.Createproperty');
        
    }
    function SaveProperty(Request $req)
    {
        
        
        $pro=new Properties();
        
        
        $pro->Title=$req->Purpose;
        $pro->Detail=$req->PropertyType;
        $pro->Price=$req->SubType;
        $pro->Location=$req->City;
        $pro->Kitchen=$req->txtLocation;
        $pro->Parking=$req->txtPropertyTitle;
        $pro->LivingRoom=$req->txtDescription;

        $pro->Bed=$req->txtRentalPrice;
        $pro->Address=$req->txtPrice;
        $pro->Agent=$req->txtLandArea;
        
        

        
        
        
        $property->save();

           return redirect('AllProperties');
    }
    
    function EditProp(Request $req, $id)
    {
        $property=new Propertys();
        $property=Propertys::find($id);
        
        
        // $property=Propertys::all();

         return view('Backend.PropertyManagement.EditPropertyForm')->with('property', $property);
        
    }
    function ShowAllProperties()
    {
        $property=new Propertys();

         $property=Propertys::all();

         return view('Backend.PropertyManagement.PropertiesList')->with('property', $property);
        
    }
//     function EditProp(Request $req)
//     {

//         $pr=Propertys::find($req->txtid);
//         // $property->ID=$req->txtID;
//         $pr->Purpose=$req->Purpose;
//         $pr->PropertyType=$req->PropertyType;
//         $pr->PropertySubType=$req->SubType;
//         $pr->RentalPrice=$req->txtRentalPrice;
//         $pr->Bedrooms=$req->Bedrooms;
//         $pr->Bathrooms=$req->Bathrooms;
//         $pr->ExpiresAfter=$req->ExpiresAfter;
//         $pr->City=$req->City;
//         $pr->Location=$req->txtLocation;
//         $pr->PropertyTitle=$req->txtPropertyTitle;
//         $pr->Description=$req->txtDescription;
        
//         $pr->Price=$req->txtPrice;
//         $pr->LandArea=$req->txtLandArea;
        
//         $pr->Unit=$req->Unit;
//         $pr->Image=$req->txtDescription;
//         // $pr->Location=$req->txtLocation;
//         // $pr->Location=$req->txtLocation;
//         // $pr->Location=$req->txtLocation;
//         $pr->save();
//         // return view('Backend.PropertyManagement.EditPropertyForm')->with('pr', $pr);
        
//     }
    function deleteproperty(Request $req, $id)
    {
        $property=Propertys::destroy($id);
        return redirect('AllProperties');
        
        
    }
    function updateProperty(Request $req)
    {
        // $pr->ID=$req->txtID;
        
        
        // $property=new Propertys();
        $property=Propertys::find($req->txtID);
        $property->Purpose=$req->Purpose;
        $property->PropertyType=$req->PropertyType;
        $property->PropertySubType=$req->SubType;
        $property->RentalPrice=$req->txtRentalPrice;
        $property->Bedrooms=$req->Bedrooms;
        $property->Bathrooms=$req->Bathrooms;
        $property->ExpiresAfter=$req->ExpiresAfter;
        $property->City=$req->City;
        $property->Location=$req->txtLocation;
        $property->PropertyTitle=$req->txtPropertyTitle;
        $property->Description=$req->txtDescription;
        
        $property->Price=$req->txtPrice;
        $property->LandArea=$req->txtLandArea;
        
        $property->Unit=$req->Unit;
        $property->Image=$req->txtDescription;
        // $property->Location=$req->txtLocation;
        // $property->Location=$req->txtLocation;
        // $property->Location=$req->txtLocation;
        $property->save();
        return redirect('AllProperties');
        

        //  return redirect('Backend.PropertyManagement.PropertiesList');
    }
//     // function buysalerent()
//     // {
        
//     //     $pr=new Propertys();
//     //     $pr=Propertys::all();
//     //     echo "$pr->Proptery_Name";
//     //     return view('Frontend.buysalerent')->with('pr', $pr);
//     // }
    function propertydetail()
    {
        $pd=new Propertys();
        $pd=Propertys::all();
        return view('Frontend.propertydetail')->with('pd', $pd);
    }
// }
// function propertydetail(Request $req, $id)
//     {
//         $pr=Propertys::find($id);
//         return view('Backend.PropertyManagement.propertydetail')->with('pr', $pr);
        
    }