<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        
        return view('dashboard');
    }
    public function index()
    {
        $us=new Admin();
        return view('Backend.Login')->with('$us',$us);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function auth(Request $request,$userid)
    {
        $us=new Admin();
        // $us->email=$request->txtemail;
        // $us->Password=$request->txtpassword;

        //  $varuid=Admin::find($request->txtemail);
        // // $varpassword=Admin::find($pass);
        // if ($userid==$request->txtemail) {
            $userid==$request->txtemail;
            echo "Login successfully";
            return redirect('admin/auth');
        // }
        // else {
        //     echo "could not Login";
        // }
        // //$result=Admin::where(['email'=>$request->),'password'=>$request->post('password')]);
        // echo '<pre>';
        // print_r($result);

    }

    
}
