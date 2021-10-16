<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    //
    public function create(Request $request)
    {

        $user = Auth::user();

        $images = [
            1 => ["url" => "http://blahblah.com"],
            2 => ["url" => "http://blahblah.com"],
            3 => ["url" => "http://blahblah.com"],

        ];

        $hashtags = [
            "1" => "#hello",
            "2" => "#world"
        ];

        $post = new Post();
        $post->user_id = $user->id;
        $post->message = $request->message;
        $post->images = json_encode($images);
        $post->hashtags = json_encode($hashtags);

        $post->save();
        return back()

            ->with('success', 'You have successfully upload image.');
    }

    Public function poacreate () {
        $allusers = User::all();
        $currentUser = Auth::user();
        $posts = Post::all();
        $photos = FileUpload::all();
        return view('poa.poacreate')->with(["posts" => $posts, "currentUser" => $currentUser, "allusers" => $allusers, "photos" => $photos,]);
    }
}
