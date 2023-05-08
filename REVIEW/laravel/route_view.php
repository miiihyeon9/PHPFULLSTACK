<?php
// * 
// app , database, resources, routes, .env만 알면됨

// ! 1. routes
// web.php

// '/'= 서버주소
Route::get('/', function () {
    return Inertia::render('Welcome');
});

// views에 hello.blade.php 파일 생성
Route::get('/hello',function(){
    return 'hello';});
    // return view('hello');});

//! Authentication 
// php artisan make:auth 명령 (로그인)


?>