<?php

namespace App\Http\Controllers;

use App\FileUpload;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $allusers = User::all();
        $currentUser = Auth::user();
        $posts = Post::all();
        $photos = FileUpload::all();
        return view('home')->with(["posts" => $posts, "currentUser" => $currentUser, "allusers" => $allusers, "photos" => $photos,]);
    }
}
