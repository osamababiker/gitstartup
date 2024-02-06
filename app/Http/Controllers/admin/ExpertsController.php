<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expert;
use App\Models\Settings;
 
class ExpertsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        return view('admin.experts.index',[
            'experts' => Expert::all(),
            'settings' => Settings::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return view('admin.experts.create', [
            'settings' => Settings::first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'resume' => 'nullable',
            'picture' => 'required',
            'bio' => 'required|string'
        ]);

        $expert = new Expert();
        if($request->has('picture')){
            $picture = $request->file('picture');
            $picture_name = time().'_'. rand(1000, 9999). '.' .$picture->extension();
            $picture->move(public_path('upload/experts'),$picture_name);
        }

        if($request->has('resume')){
            $resume = $request->file('resume');
            $resume_name = time().'_'. rand(1000, 9999). '.' .$resume->extension();
            $resume->move(public_path('upload/experts'),$resume_name);
        }else{
        	$resume_name = "";
        }

        $expert->name = $request->name;
        $expert->position = $request->position;
        $expert->resume = $resume_name;
        $expert->bio = $request->bio;
        $expert->picture = $picture_name;
        $expert->save();

        return redirect()->back()->with('feedback', 'expert has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $expert = Expert::findOrFail($id);
        return view('admin.experts.edit', [
            'expert' => $expert,
            'settings' => Settings::first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id){
        $expert = Expert::findOrFail($id);
        return view('admin.experts.edit', [
            'expert' => $expert,
            'settings' => Settings::first()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id){
        $request->validate([
            'name' => 'required|string',
            'position' => 'required|string',
            'bio' => 'required|string'
        ]);
        $expert = Expert::findOrFail($id);
        if($request->has('picture')){
            if(file_exists(public_path('upload/experts/'.$expert->picture))){
                unposition(public_path('upload/experts/'.$expert->picture));
            }
            $picture = $request->file('picture');
            $picture_name = time().'_'. rand(1000, 9999). '.' .$picture->extension();
            $picture->move(public_path('upload/experts'),$picture_name);
        }else{
            $picture_name = $expert->picture;
        }

        if($request->has('resume')){
            $resume = $request->file('resume');
            $resume_name = time().'_'. rand(1000, 9999). '.' .$resume->extension();
            $resume->move(public_path('upload/experts'),$resume_name);
        }else{
            $resume_name = $expert->resume;
        }

        $expert->name = $request->name;
        $expert->position = $request->position;
        $expert->resume = $resume_name;
        $expert->picture = $picture_name;
        $expert->bio = $request->bio;
        $expert->save();

        return redirect()->back()->with('feedback', 'expert has been updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        Expert::findOrFail($id)->delete();
        return redirect()->back()->with('feedback', 'expert has been deleted');
    }
}
