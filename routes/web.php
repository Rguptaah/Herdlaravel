<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

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
    return view('jobs',[
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Designer',
                'salary' => '$10,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$50,000'
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'salary' => '$70,000'
            ]
        ]
    ]);
});

//Single Job Page Route
Route::get('/jobs/{id}', function ($id) {
    // dd($id);
    $jobs = [
        [
            'id' => 1,
            'title' => 'Designer',
            'salary' => '$10,000'
        ],
        [
            'id' => 2,
            'title' => 'Developer',
            'salary' => '$50,000'
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'salary' => '$70,000'
        ]
    ];
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    // Handle the case where the job is not found
    if (!$job) {
        abort(404, 'Job not found');
    }
    return view('job',['job' => $job]);
});

//Contact Page Route
Route::get('/contact', function () {
    return view('contact');
});
