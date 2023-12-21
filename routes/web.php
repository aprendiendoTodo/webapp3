<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ImageController;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/home', 'App\Http\Controllers\HomeController@index');
//Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', HomeController::class);

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/contact', [ContactController::class, 'index']);

Route::resource('blog', BlogController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.submit');

Route::post('upload-file', [ImageController::class, 'handleImage'])->name('upload-file');

Route::get('/success', function(){
    return '<h1>Successfully upload</h1>';
})->name('success');

/*
Route::get('about', function(){
    return "<h1>About page</h1>";
})->name('hello');

Route::get('about', function(){
    return view('about.index');
});

Route::get('about2', function(){
    $aboutValue = 'This is About Page';
    $aboutValue2 = 'This is About variable two';
    return view('about.about', compact('aboutValue', 'aboutValue2'));
});

Route::get('contact', function(){
    return view('contact');
});

Route::get('contact/{id}', function($id){
    return $id;
})->name('edit-contact');

Route::get('home3', function(){
    return "<a href='/about'>About</a>";
});

Route::get('hom2', function(){
    return "<a href='".route('edit-contact', 7)."'>About</a>";
});

*/

/* Route grouping */
/*
Route::group(['prefix' => 'customer'], function () {
    Route::get('/', function(){
        return "<h1>Customer list</h1>";
    });
    
    Route::get('/create', function(){
        return "<h1>Customer create</h1>";
    });
    
    Route::get('/show', function(){
        return "<h1>Customer show</h1>";
    });    
});
*/

/* Route Methods */


/** 
 * GET - Request a resource 
 * POST - Create a new resource 
 * PUT - Update a resource 
 * PATCH - Modify a resource 
 * DELETE - Delete a resource 
*/

/*
Route::fallback(function(){
    return "<h1>Route Not Exist.</h1>";
});  
*/

/**
 * M V C
 * M = Model
 * V = View
 * C = Controller
 */

 // CSRF TOKEN