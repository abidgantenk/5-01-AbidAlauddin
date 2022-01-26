<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function (){
    return view ('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function  (){
    return view ('about', [
        "title" => "About",
        "nama" => "Abid Alauddin",
        "email" => "3103120002@",
        "gambar" => "abid.jpeg"
    ]);
});

Route::get('/gallery', function (){
    return view ('gallery',[
        "title" => "gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);
