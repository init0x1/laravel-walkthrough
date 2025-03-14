<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
// use the Job model insteed of writing the logic in the route
use App\Models\Job;

Route::get('/', function () {
    return view('welcome');
});


// create a new route that will serve the test view
Route::get('/jobs', function () {

     // pass data to the view
    //$jobs = Job::all();
    // using paginate
    $jobs = Job::with('employer')->paginate(5);

    return view('jobs',['jobs'=>$jobs]);
});

// get the job id from the URL
Route::get('/jobs/{id}', function ($id) {


    // find the job with the given id
    $job = Job::find($id);
    return view('job',['job'=>$job]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
