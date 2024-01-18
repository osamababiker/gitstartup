<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Project;
use App\Models\Settings;
use App\Models\Partner;
use App;

class HomeController extends Controller
{
    public function index(){
        session()->put('current_page', 'home');
        return view('index', [
            'projects' => Project::limit(3)->get(),
            'settings' => Settings::first()
        ]);
    }

    public function about(){
        session()->put('current_page', 'about');
        return view('about', [
            'settings' => Settings::first()
        ]);
    }


    public function partnership(){
        session()->put('current_page', 'partnership');
        return view('partnership', [
            'projects' => Project::get(),
            'settings' => Settings::first()
        ]);
    }

    public function postContactMessage(Request $request){
        $request->validate([
            'name' => 'required|string',
            'company_name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|email',
            'message' => 'required|string'
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->company_name = $request->company_name;
        $message->email = $request->email;
        $message->phone = $request->phone;
        $message->message = $request->message;
        $message->save();
        App::isLocale('en') ? $message = 'Your message has been sent' : $message = 'تم ارسال الرسالة الخاصة بك';
        return redirect()->back()->with('feedback', $message);
    }
}
