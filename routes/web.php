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
    return view('welcome'); //ada disini --> resources\views\welcome.blade.php
});


Route::get('/PrintForm', function () {
	// echo $id;
        $a = storage_path('app/public/abc.pdf');
// dd($a);

        // $headers = ['Content-Type' => 'application/pdf'];
        // return response()->file($a,$headers);

});

