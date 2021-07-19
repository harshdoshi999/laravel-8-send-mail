<?php

use Illuminate\Support\Facades\Route;

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

Route::get('test-mail', function () {
   
    $details = [
        'title' => 'Hello there,',
        'body' => 'Greetings from CodePortal!!'
    ];
   
    \Mail::to('harshdoshi999@gmail.com')->send(new \App\Mail\TestMail($details));
   
    dd("Mail sent!!");
});
