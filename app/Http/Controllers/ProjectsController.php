<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Settings;


class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $projects = Project::get();
        return response()->json($projects, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $project = Project::findOrFail($id);
        return response()->json($project, 200);
    }

}
