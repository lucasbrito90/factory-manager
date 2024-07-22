<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    dd(\App\Models\Customers::first()->with('branches.projects.projectItems')->get());
});
