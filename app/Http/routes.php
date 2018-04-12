<?php

Route::get('/',function(){
    return view('welcome');
});

Route::get("index", "test@index");
Route::post("store", "test@store");