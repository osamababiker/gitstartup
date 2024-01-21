<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $categories = Category::with('blog')->get();
        return response()->json($categories, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $category = Category::with('blogs')->findOrFail($id);
        return response()->json($category, 200);
    }

}
