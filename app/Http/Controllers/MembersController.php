<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use Validator;

class MembersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $members = Member::get();
        return response()->json($members, 200);
    }


     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $rules = [
            'name' => 'required|string',
            'email' => 'required|string',
            'phone' => 'nullable',
            'role' => 'required|string'
        ];
        $validator = Validator::make($request->all(), $rules);

        if($validator->fails())
            return response()->json($validator->errors(), 400);

        $member = new Member();
        $member->name = $request->name;
        $member->email = $request->email;
        $member->phone = $request->phone;
        $member->role = $request->role;
        $member->save();

        return response()->json($member,201);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){
        $member = Member::findOrFail($id);
        return response()->json($member, 200);
    }

}
