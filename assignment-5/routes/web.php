<?php

use Illuminate\Support\Facades\Route;

Route::get('/evaluation', function () {

    $name = "Maria Zepol";
    $prelim = 91;
    $midterm = 87;
    $final = 93;

    return view('evaluation', compact('name', 'prelim', 'midterm', 'final'));
});
