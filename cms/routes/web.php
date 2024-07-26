<?php

use App\Models\Lodging;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('lodgings',['lodgings'=>Lodging::all()]);
});

Route::get('/lodgings/{id}', function($id){
    $lodging = Lodging::find($id);
    return view('lodging',['lodging'=>$lodging]);
});
