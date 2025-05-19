<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
  //  return view();
});

Route::get('/posts',function(){
    return "Aqui se mostraran todos los post";
});


