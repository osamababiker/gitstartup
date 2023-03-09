<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Comment;

class BlogsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('blogs/index', [
            'blogs' => Blog::paginate(10)
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
            'comments' => Comment::where('sub_of', $id)->get()
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

        session()->get('locale') == 'en' ? $message = 'Your comment has been posted' : $message = 'تم اضافة تعليقك بنجاح';
        return redirect()->back()->with('feedback', $message);
    }

}
