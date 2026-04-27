<?php

use Illuminate\Support\Facades\Route;

//Problem 1
Route::get('/student/{id}/{name}', function ($id, $name) {
    return view('student', ['id' => $id, 'name' => $name]);
});

//Problem 2
Route::get('/course/{course}/{year?}', function ($course, $year = 1) {
    return view('course', ['course' => $course, 'year' => $year]);
});

//Problem 3
Route::get('/ojt/{company}/{city}/{allowance?}', function ($company, $city, $allowance = 'No') {
    return view('ojt', ['company' => $company, 'city' => $city, 'allowance' => $allowance]);
});

//Problem 4
Route::get('/event/{event}/{participant}/{year}', function ($event, $participant, $year) {
    return view('event', ['event' => $event, 'participant' => $participant, 'year' => $year]);
});
