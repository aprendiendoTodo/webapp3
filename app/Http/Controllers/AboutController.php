<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $aboutValue = 'This is About Page';
        $aboutValue2 = 'This is About variable two';

        return view('about.about', compact('aboutValue', 'aboutValue2'));
    }
}
