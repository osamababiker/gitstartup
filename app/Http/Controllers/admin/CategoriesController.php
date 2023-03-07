<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'en_name' => 'required|string',
            'ar_name' => 'required|string'
        ]);
        $category = new Category();
        $category->en_name = $request->en_name;
        $category->ar_name = $request->ar_name;
        $category->sub_of = $request->sub_of;
        $category->save();
        return redirect()->back()->with('feedback', 'category has been created');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'en_name' => 'required|string',
            'ar_name' => 'required|string'
        ]);
        $category = Category::findOrFail($request->category_id);
        $category->en_name = $request->en_name;
        $category->ar_name = $request->ar_name;
        $category->sub_of = $request->sub_of;
        $category->save();
        return redirect()->back()->with('feedback', 'category has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        Category::findOrFail($request->category_id)->delete();
        return redirect()->back()->with('feedback', 'category has been deleted');
    }
}
