<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;
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

//Home Page Route
Route::get('/', function () {
    return view('home',[
        'greeting' => 'Hello'
    ]);
});

//Jobs Page Route
Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

//Single Job Page Route
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job',['job' => $job]);
});

//Blogs Page Route
Route::get('/blogs', function () {
    return view('blogs', ['blogs' => Post::all()]);
});

//Single Blog Page Route
Route::get('/blogs/{id}', function ($id) {
    $post = Post::find($id);
    return view('blog',['blog' => $post]);
});

//Contact Page Route
Route::get('/contact', function () {
    return view('contact');
});
