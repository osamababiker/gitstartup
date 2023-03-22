<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Story;
use App\Models\Settings;

class StoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.stories.index',[
            'stories' => Story::paginate(10),
            'settings' => Settings::first()
        ]);
    }

     /**
     * Show the form for creating a new resource.
     */
    function create() {
        return view('admin.stories.create', [
            'categories' => Category::all(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'en_title' => 'required|string',
            'ar_title' => 'required|string',
            'en_content' => 'required|string',
            'ar_content' => 'required|string',
            'sub_of' => 'required',
            'image' => 'required',
        ]);
        $story = new Story();
        if($request->has('image')){
            $image = $request->file('image');
            $image_name = time().'_'. rand(1000, 9999). '.' .$image->extension();
            $image->move(public_path('upload/stories'),$image_name);
        }
        $story->en_title = $request->en_title;
        $story->ar_title = $request->ar_title;
        $story->en_content = $request->en_content;
        $story->ar_content = $request->ar_content;
        $story->sub_of = $request->sub_of;
        $story->image = $image_name;
        $story->save();
        return redirect()->back()->with('feedback', 'story has been created');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $story = Story::findOrFail($id);
        return view('admin.stories.edit', [
            'story' => $story,
            'categories' => Category::all(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $request->validate([
            'en_title' => 'required|string',
            'ar_title' => 'required|string',
            'en_content' => 'required|string',
            'ar_content' => 'required|string',
            'sub_of' => 'required',
        ]);
        $story = Story::findOrFail($id);
        if($request->has('image')){
            if(file_exists(public_path('upload/stories/'.$story->image))){
                unlink(public_path('upload/stories/'.$story->image));
            }
            $image = $request->file('image');
            $image_name = time().'_'. rand(1000, 9999). '.' .$image->extension();
            $image->move(public_path('upload/stories'),$image_name);
        }else{
            $image_name = $story->image;
        }
        $story->en_title = $request->en_title;
        $story->ar_title = $request->ar_title;
        $story->en_content = $request->en_content;
        $story->ar_content = $request->ar_content;
        $story->sub_of = $request->sub_of;
        $story->image = $image_name;
        $story->save();
        return redirect()->back()->with('feedback', 'story has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $story = Story::findOrFail($id)->delete();
        return redirect()->back()->with('feedback', 'story has been deleted');
    }
}
