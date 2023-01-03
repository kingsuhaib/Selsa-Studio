<?php

namespace App\Http\Controllers;
  
use App\Models\Project;
use Illuminate\Http\Request;
class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id','desc')->paginate(9999);
    
        return view('viewProjects',compact('projects'));
    }

   

    public function store(Request $request)
    {
        $request->validate([
            'bname' => 'required',
            
            'bdesc' => 'required',
            'bcolors' => 'required',
            'details' => 'required',
            'pkg' => 'required',
            
        ]);
        
        Project::create($request->post());

        return redirect()->route('home')->with('success','Order has been created successfully.');
    }
}
