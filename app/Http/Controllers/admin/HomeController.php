<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Message;
use App\Models\Partner;
use App\Models\Settings;

class HomeController extends Controller
{
    public function index(){
        return view('admin/index', [
            'messages_count' => Message::count(),
            'comments_count' => Comment::count(),
            'partnership_count' => Partner::count(),
            'settings' => Settings::first()
        ]); 
    }

}
