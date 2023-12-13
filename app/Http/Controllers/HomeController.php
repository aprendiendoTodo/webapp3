<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'this is a body text 1',
                'status' => 1
            ],
            [
                'title' => 'Title two',
                'body' => 'this is a body text 2',
                'status' => 0
            ],
            [
                'title' => 'Title three',
                'body' => 'this is a body text 3',
                'status' => 1
            ],
            [
                'title' => 'Title four',
                'body' => 'this is a body text 4',
                'status' => 1
                
            ] ,
            [
                'title' => 'Title five',
                'body' => 'this is a body text 5',
                'status' => 0
            ]                          
            ];
    
        return view('home', compact('blogs'));          
    }
}
