<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expert;

class ExpertsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $experts = Expert::get();
        return response()->json($experts, 200);
    } 
 
    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $expert = Expert::findOrFail($id);
        return response()->json($expert, 200);
    }
}
