<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\Story;
use App\Models\Project;
use App\Models\Settings;
use App\Models\Partner;
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


    public function partnership(){
        return view('partnership', [
            'projects' => Project::get(),
            'settings' => Settings::first()
        ]);
    }

    public function postPartnership(Request $request){
        $request->validate([
            'name' => 'required|string',
            'company' => 'required|string',
            'address' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            'project_id' => 'required',
            'requirements' => 'required|string'
        ]);
        $partner = new Partner();
        $partner->name = $request->name;
        $partner->company = $request->company;
        $partner->address = $request->address;
        $partner->email = $request->email;
        $partner->phone = $request->phone;
        $partner->project_id = $request->project_id;
        $partner->requirements = $request->requirements;
        $partner->save();
        App::isLocale('en') ? $message = 'Your request has been sent' : $message = 'تم ارسال الطلب الخاص بك';
        return redirect()->back()->with('feedback', $message);
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
