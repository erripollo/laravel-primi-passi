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

    $data = [
        'name' => 'Enrico',
        'lastname' => 'Pollone',
        'skills' => [
            [
                'name' => 'html',
                'link' => '/html'
            ],
            [
                'name' => 'css',
                'link' => '/css'
            ],
            [
                'name' => 'js',
                'link' => '/js'
            ],
            [
                'name' => 'vue js',
                'link' => '/vue'
            ],
            [
                'name' => 'sass',
                'link' => '/sass'
            ],
            [
                'name' => 'php',
                'link' => '/php'
            ],
            [
                'name' => 'laravel',
                'link' => '/laravel'
            ],
        ]
    ];

    return view('home', $data);
});

Route::get('/html', function () {
    return view('html');
});

Route::get('/css', function () {
    return view('css');
});

Route::get('/js', function () {
    return view('js');
});

Route::get('/vue', function () {
    return view('vue');
});

Route::get('/sass', function () {
    return view('sass');
});

Route::get('/php', function () {
    return view('php');
});

Route::get('/laravel', function () {
    return view('laravel');
});