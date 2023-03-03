<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogsController extends Controller
{

    public function index(){
        return view('blogs/index');
    }

    public function show(string $id){
        return view('blogs/show');
    }

}
