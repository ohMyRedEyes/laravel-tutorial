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

Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work',
    ];

    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'Awesome',
        'req' => request('title'),  // value taken from address bar '?title=SomeTitle'
    ]);

    //another ways to return the same
    return view('welcome')->withTasks($tasks)->withFoo('Awesome');  //'with' will be removed and the rest will
                                                                    // become a lowecase variable name
    
    return view('welcome')->withTasks([
        'Go to the store',
        'Go to the market',
        'Go to work',
    ]);

    return view('welcome')->with([
        'tasks' => [
            'Go to the store',
            'Go to the market',
            'Go to work',
        ],
        'foo' => 'Awesome',
        'req' => request('title'),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
