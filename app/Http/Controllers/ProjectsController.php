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
        return view('projects/index', [
            'projects' => Project::all(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $project = Project::findOrFail($id);
        return view('projects/show', [
            'project' => $project,
            'projects' => Project::where('id', '!=', $id)->limit(4),
            'settings' => Settings::first()
        ]);
    }

}
