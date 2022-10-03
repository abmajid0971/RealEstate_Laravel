<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Propertys;

class Property extends Controller
{
    function index()
    {
        
        return view('Backend.Createproperty');
        
    }
    function CreateProperty(Request $req)
    {
        
        
        $property=new Propertys();
        
        
        $property->Proptery_Name=$req->txtProptery_Name;
        $property->Address=$req->txtAddress;
        $property->Starting_Price=$req->txtStarting_Price;
        $property->Ending_Price=$req->txtEnding_Price;
        $property->Agent=$req->txtAgent;
        $property->Owner_Name=$req->txtOwner;
        $property->save();

        //return view('Backend.Createproperty');
    }
    function e(Request $req)
    {
        
        
        $property=new Propertys();
        
        
        $property->Proptery_Name=$req->txtProptery_Name;
        $property->Address=$req->txtAddress;
        $property->Starting_Price=$req->txtStarting_Price;
        $property->Ending_Price=$req->txtEnding_Price;
        $property->Agent=$req->txtAgent;
        $property->Owner_Name=$req->txtOwner;
        $property->save();

        //return view('Backend.Createproperty');
    }
    function EditProperty()
    {
        $property=new Propertys();
        $property=Propertys::all();

        return view('Backend.PropertyManagement.PropertiesList')->with('property', $property);
        
    }
    function buysalerent()
    {
        $pr=new Propertys();
        $pr=Propertys::all();
        return view('Frontend.buysalerent')->with('pr', $pr);
    }
    function propertydetail()
    {
        $pd=new Propertys();
        $pd=Propertys::all();
        return view('Frontend.propertydetail')->with('pd', $pd);
    }
}
