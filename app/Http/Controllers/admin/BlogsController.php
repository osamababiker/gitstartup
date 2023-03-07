<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.blogs.index', [
            'blogs' => Blog::paginate(15),
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'en_title' => 'required|string',
            'ar_title' => 'required|string',
            'sub_of' => 'required',
            'en_description' => 'required',
            'ar_description' => 'required',
        ]);

        if($request->has('image')){
            $image = $request->file('image');
            $image_name = time().'_'. rand(1000, 9999). '.' .$image->extension();
            $image->move(public_path('upload/blogs'),$image_name);
        } 

        $blog = new Blog();
        $blog->sub_of = $request->sub_of;
        $blog->ar_title = $request->ar_title;
        $blog->en_title = $request->en_title;
        $blog->en_description = $request->en_description;
        $blog->ar_description = $request->ar_description;
        $blog->image = $image_name;
        $blog->save();
        return redirect()->back()->with('feedback', 'post has been created');
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){
        $request->validate([
            'en_title' => 'required|string',
            'ar_title' => 'required|string',
            'sub_of' => 'required',
            'en_description' => 'required',
            'ar_description' => 'required',
        ]);

        $blog = Blog::findOrFail($request->blog_id);

        if($request->has('image')){
            if(file_exists(public_path('upload/blogs/'.$blog->image))){
                unlink(public_path('upload/blogs/'.$blog->image));
            }
            $image = $request->file('image');
            $image_name = time().'_'. rand(1000, 9999). '.' .$image->extension();
            $image->move(public_path('upload/blogs'),$image_name);
        }else{
            $image_name = $blog->image;
        }

        $blog->sub_of = $request->sub_of;
        $blog->ar_title = $request->ar_title;
        $blog->en_title = $request->en_title;
        $blog->en_description = $request->en_description;
        $blog->ar_description = $request->ar_description;
        $blog->image = $image_name;
        $blog->save();
        return redirect()->back()->with('feedback', 'post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request){
        Blog::findOrFail($request->blog_id)->delete();
        return redirect()->back()->with('feedback', 'post has been deleted');
    }
}
