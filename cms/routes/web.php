<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return "you are in the login view";
})->name("login");

Route::get('/register', function () {
   return view("welcome");
})->name("register");

Route::get("/foo",function(){
   return "foo function called ";
});

Route::get("/foo/{name}/{id}",function($id,$name){
   return "the detail of foo is ".$id.$name;
})->where(['id'=>'[0-9]+','name'=>'[a-z]+'])->name("foo");

Route::get("/send",function(){
   return redirect()->route('register');
});

Route::get("/salt/{id}","salt@show")->where(['name'=>'salt','id'=>'{0-9}+']);