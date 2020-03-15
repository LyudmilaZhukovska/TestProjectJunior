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

Route::get('/task_first', function () {
    $tasks = DB::table('bids')->get();
    $captions = DB::table('events')->get();

   return view('firsttask', compact('tasks', 'captions'));
    // return view('firsttask');
});

Route::get('/task_second', function () {
    return view('secondtask');
});

Route::get('/task_third', function () {
    return view('thirdtask');
});


