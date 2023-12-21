<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    function handleImage(Request $request)
    {
        $request->image->storeAs('/images', 'new_image.jpg');


        
        // return $request->all();
        // dd($request->file('image'));
    }
}
