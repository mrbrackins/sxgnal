<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\FileUpload;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChecklistController extends Controller
{
    //
    public function index()
    {
        $currentUser = Auth::user();
        $checklist = Checklist::where('user_id', $currentUser->id)->first();

        return view('checklist')->with(["currentUser" => $currentUser, "checklist" => $checklist ]);
    }
}
