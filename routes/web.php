<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Models\Job;

Route::get('/jobs', function () {

    return view('jobs', [
        'jobs' => Job::all()
    ]);

});

Route::get('/jobs/{id}', function ($id) {

    return view('job', [
        'job' => Job::findOrFail($id)
    ]);

});
=======

Route::get('/', function () {
    return view('welcome');
});
>>>>>>> ffea3a93c4157f8dab2c13f8509dd81a8985ef18
