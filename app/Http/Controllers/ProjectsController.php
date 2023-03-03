<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    public function index(){
        return view('projects/index');
    }


    public function show(string $id){
        return view('projects/show');
    }

}
