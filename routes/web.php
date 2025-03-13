<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


// create a new route that will serve the test view
Route::get('/jobs', function () {

     // pass data to the view
     $jobs = [
        [
            "id"=>1,
            "title"=>"Web Developer",
            "salary"=>"$60,000",
        ],
        [
            "id"=>2,
            "title"=>"Software Engineer",
            "salary"=>"$80,000",
        ],
        [
            "id"=>3,
            "title"=>"Network Engineer",
            "salary"=>"$70,000",
        ],
        [
            "id"=>4,
            "title"=>"Database Administrator",
            "salary"=>"$75,000",
        ]
        ];

    return view('jobs',['jobs'=>$jobs]);
});

// get the job id from the URL
Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            "id"=>1,
            "title"=>"Web Developer",
            "salary"=>"$60,000",
        ],
        [
            "id"=>2,
            "title"=>"Software Engineer",
            "salary"=>"$80,000",
        ],
        [
            "id"=>3,
            "title"=>"Network Engineer",
            "salary"=>"$70,000",
        ],
        [
            "id"=>4,
            "title"=>"Database Administrator",
            "salary"=>"$75,000",
        ]
        ];

    // find the job with the given id
    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);// find the job with the given id and return it if it not found return null

    return view('job',['job'=>$job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
