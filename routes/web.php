<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;

Route::get('/', function () {
    return view('form');
});

Route::post("/form",[Form::class,'view']);
Route::post("/data",function(){
    return view('formData');
});
Route::get("deleteForm/{id}",[Form::class,'delete' ]);
Route::get("update/{id}",[Form::class,'update' ]);
Route::put("updateData/{id}",[Form::class,'updateData' ]);