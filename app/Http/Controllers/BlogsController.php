<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Settings;
use App\Models\Category;
use App;

class BlogsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        $blogs = Blog::where('deleted_at', null);
        if($request->category)
            $blogs->where('sub_of', $request->category);
        if($request->title)
            $blogs->where('en_title','like', '%' . $request->title . '%')
                ->orWhere('ar_title','like', '%' . $request->title . '%');

        return view('blogs/index', [
            'blogs' => $blogs->paginate(10),
            'categories' => Category::get(),
            'settings' => Settings::first()
        ]);
    }

     /**
     * Display the specified resource.
     */
    public function show(string $id){
        $blog = Blog::findOrFail($id);
        return view('blogs/show', [
            'blog' => $blog,
            'blogs' => Blog::where('id', '!=', $id)->limit(4),
            'comments' => Comment::where('sub_of', $id)->get(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function postComments(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'comment' => 'required|string',
            'blog_id' => 'required'
        ]);

        $comment = new Comment();
        $comment->sub_of = $request->blog_id;
        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->save();

        App::isLocale('en') ? $message = 'Your comment has been posted' : $message = 'تم اضافة تعليقك بنجاح';
        return redirect()->back();
    }

}
