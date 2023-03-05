<?php

namespace App\Http\Controllers\Admin;
use App;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;



class AuthController extends Controller
{


    // login section
    public function showLogin(){
        return view('admin/login');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        $message = "Please check your data and try again";
        session()->flash('feedback',$message);
        return redirect('login');
    }


    public function logout (Request $request) {
        Auth::logout();
        return redirect('login');
    }

    public function update(Request $request){
        $request->validate([
            'oldPassword' => 'required',
            'newPassword' => 'required',
        ]);

        if(Auth::user()->password === Hash::make($request->oldPassword)){
            $newPassword = Hash::make($request->newPassword);
            Auth::user()->password = $newPassword;
            return redirect()->back()->with('feedback', 'password has been updated successfully');
        }
        
        return redirect()->back()->with('feedback', 'the old password you entred is wrong !');
        
    }


}