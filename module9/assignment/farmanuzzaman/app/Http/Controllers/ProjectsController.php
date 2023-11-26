<?php

namespace App\Http\Controllers;
use App\Models\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        // Fetch projects from the database if using one
        //$projects = Project::all();
        
        //return view('projects', ['projects' => $projects]);
        return view('projects');
    }
}
