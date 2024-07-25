<?php

use App\Models\Lodging;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lodgings',function(){
    return view('lodging',['lodgings'=>Lodging::all()]);
});
