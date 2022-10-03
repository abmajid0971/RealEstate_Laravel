<?php

namespace App\Http\Controllers;
use App\Models\Agent;

use Illuminate\Http\Request;

class AgentController extends Controller
{
    function index()
    {
        
        return view('Backend.Agent.AddAgent');
        
    }
    function SaveAgent(Request $req)
    {
        
        
        $ag=new Agent();
        
        
        $ag->AName=$req->txtName;
        $ag->Description=$req->txtDescription;
        $ag->Phone=$req->txtPhone;
        $ag->Email=$req->txtEmail;
        $ag->save();

           return redirect('Allagents');
    }
    function ShowAllagents()
    {
        $agent=new Agent();

         $agent=Agent::all();

         return view('Backend.Agent.AgentList')->with('agent', $agent);
        
    }
    // -------------------Edit Agent-------------------
    function editAgent(Request $req, $id)
    {
        $agent=new Agent();
        $agent=Agent::find($id);
        return view('Backend.Agent.EditAgentForm')->with('agent', $agent);
        
    }
    function updateagent(Request $req)
    {
        $agent=new Agent();

        $agent=Agent::find($req->txtID);
                
        $agent->AName=$req->txtName;
        $agent->Description=$req->txtDescription;
        $agent->Phone=$req->txtPhone;
        $agent->Email=$req->txtEmail;
        $agent->save();

           return redirect('Allagents');
        
    }
}
