<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Addresse;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //  post - may have many tags
        //  tag - may have many posts   
        //  pivot table 

        // $post = Post::first();
        // $tag = Tag::first();
        // $post->tags()->attach($tag);

        // $post = Post::with('tags')->first();
        // $tag = Tag::first();
        // $post->tags()->attach([2,3,4]);
        // return $post;

        $posts = Post::with('tags')->get();

        return view('home', compact('posts'));
    }
}
