<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;

Route::get('/', function () {
    return view('form');
});

Route::post("/form",[Form::class,'data']);
