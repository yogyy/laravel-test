<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', [
        'nama' => 'Klein Moretti'
    ]);
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->simplePaginate(3);
    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/jobs/{id}', function ($id) {
    return Job::find($id);
});
