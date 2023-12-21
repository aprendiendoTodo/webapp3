<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    function handleImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'min:100', 'max:300', 'mimes:png,jpg,gif'] // 500kb, 'image'
        ]);

        $request->image->storeAs('/images', 'new_image.jpg');

        // return redirect()->route('success');        
        // return redirect()->back();
        return redirect('/success');


        // return $request->all();
        // dd($request->file('image'));
    }
}
