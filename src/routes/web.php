<?php

use Illuminate\Support\Facades\Route;
// use helloJarvish\Helloprint;

// this is used for define the namespace for controller file's
Route::group(['namespace'=>'Mac\Contact\Http\Controller'],function(){

// here is defined the routes

Route::get('con','UsersController@index');

});

// Route::get('contact', function () {
//     return "hello";
// });

