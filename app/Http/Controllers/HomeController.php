<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Story;
use App\Models\Project;
use App\Models\Settings;
use App;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            'projects' => Project::limit(3)->get(),
            'stories' => Story::get(),
            'settings' => Settings::first()
        ]);
    }

    public function about(){
        return view('about', [
            'settings' => Settings::first()
        ]);
    }

    public function postContactMessage(Request $request){
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->message = $request->message;
        $message->save();
        App::isLocale('en') ? $message = 'Your message has been sent' : $message = 'تم ارسال الرسالة الخاصة بك';
        return redirect()->back()->with('feedback', $message);
    } 
}
