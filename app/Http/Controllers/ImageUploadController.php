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

        return response()->json([
            'status' => 'YYou have successfully upload image.',
            'data' => $imageName,
        ]);


    }
}
