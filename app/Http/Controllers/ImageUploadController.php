<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageUploadController extends Controller
{
    //
    public function create(Request $request)
    {
        $imageName = time() . '.' . request()->image->getClientOriginalExtension();
        return request()->image->move(public_path('images'), $imageName);

        return back()

            ->with('success', 'You have successfully upload image.')

            ->with('image', $imageName);
    }
}
