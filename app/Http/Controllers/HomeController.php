<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
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
        session()->get('locale') == 'en' ? $message = 'Your message has been sent' : $message = 'تم ارسال الرسالة الخاصة بك';
        return redirect()->back()->with('feedback', $message);
    }
}
