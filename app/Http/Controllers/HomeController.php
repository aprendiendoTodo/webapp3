<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Addresse;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use File;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //  3 diferent ways to delete files
        // Storage::disk('public')->delete('/images/new_image.jpg');

        // File::delete(storage_path('/app/public/images/3.jpg'));

        // unlink(storage_path('/app/public/images/2.jpg'));

        // return view('home');
    }
}
