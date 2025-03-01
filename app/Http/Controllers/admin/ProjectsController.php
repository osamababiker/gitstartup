<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Settings;
use Str;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.projects.index',[
            'projects' => Project::paginate(15),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.projects.create', [
            'categories' => Category::all(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'en_name' => 'required|string',
            'ar_name' => 'required|string',
            'progress' => 'required',
            'link' => 'required|url',
            'sub_of' => 'required',
            'logo' => 'required',
            'image' => 'required',
            'video_url' => 'nullable',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',
            'page_description' => 'required|string',
            'page_key_words' => 'required|string',
        ]);

        $project = new Project();
        if($request->has('logo')){
            $logo = $request->file('logo');
            $logo_name = time().'_'. rand(1000, 9999). '.' .$logo->extension();
            $logo->move(public_path('upload/projects'),$logo_name);
        }else $logo_name = "";
        if($request->has('image')){
            $image = $request->file('image');
            $image_name = time().'_'. rand(1000, 9999). '.' .$image->extension();
            $image->move(public_path('upload/projects'),$image_name);
        }else $image_name = "";

        $project->en_name = $request->en_name;
        $project->ar_name = $request->ar_name;
        $project->progress = $request->progress;
        $project->slug = Str::slug($request->en_name);
        $project->link = $request->link;
        $project->video_url = $request->video_url;
        $project->sub_of = $request->sub_of;
        $project->en_description = $request->en_description;
        $project->ar_description = $request->ar_description;
        $project->page_description = $request->page_description;
        $project->page_key_words = $request->page_key_words;
        $project->logo = $logo_name;
        $project->image = $image_name;
        $project->save();

        return redirect()->back()->with('feedback', 'project has been created');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $project = Project::findOrFail($id);
        return view('admin.projects.edit', [
            'project' => $project,
            'categories' => Category::all(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){ 
        $request->validate([
            'en_name' => 'required|string',
            'ar_name' => 'required|string',
            'progress' => 'required',
            'link' => 'required|url',
            'sub_of' => 'required',
            'en_description' => 'required|string',
            'ar_description' => 'required|string',
            'page_description' => 'required|string',
            'page_key_words' => 'required|string',
        ]);
        $project = Project::findOrFail($id);
        if($request->has('logo')){
            $logo = $request->file('logo');
            $logo_name = time().'_'. rand(1000, 9999). '.' .$logo->extension();
            $logo->move(public_path('upload/projects'),$logo_name);
        }else{
            $logo_name = $project->logo;
        }

        if($request->has('image')){
            $image = $request->file('image');
            $image_name = time().'_'. rand(1000, 9999). '.' .$image->extension();
            $image->move(public_path('upload/projects'),$image_name);
        }else{
            $image_name = $project->image;
        }

        $project->en_name = $request->en_name;
        $project->ar_name = $request->ar_name;
        $project->progress = $request->progress;
        $project->link = $request->link;
        $project->video_url = $request->video_url;
        $project->sub_of = $request->sub_of;
        $project->en_description = $request->en_description;
        $project->ar_description = $request->ar_description;
        $project->page_description = $request->page_description;
        $project->page_key_words = $request->page_key_words;
        $project->logo = $logo_name;
        $project->image = $image_name;
        $project->save();

        return redirect()->back()->with('feedback', 'project has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Project::findOrFail($id)->delete();
        return redirect()->back()->with('feedback', 'project has been deleted');
    }
}
